<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGateway;
use App\Data\Payments\PaymentInitializationData;
use App\Data\Payments\PaymentInitializationResult;
use App\Enums\DonationStatus;
use App\Models\Donation;
use App\Services\Payment\PaymobPayment;
use Illuminate\Support\Arr;

class PaymobPaymentGateway implements PaymentGateway
{
    public function __construct(private PaymobPayment $paymobPayment) {}

    public function initialize(Donation $donation, PaymentInitializationData $data): PaymentInitializationResult
    {
        $response = $this->paymobPayment->pay([
            'payment_id' => (string) $donation->id,
            'amount' => (float) $donation->amount,
            'user_first_name' => $donation->anonymous ? 'Anonymous' : (string) str($donation->donor_name)->before(' '),
            'user_last_name' => $donation->anonymous ? 'Donor' : (string) str($donation->donor_name)->after('-'),
            'user_email' => $donation->donor_email ?: 'donor@example.com',
            'user_phone' => $donation->donor_phone ?: '+201000000000',
        ], $data->returnUrl);

        return new PaymentInitializationResult(
            redirectUrl: (string) ($response['redirect_url'] ?? ''),
            transactionId: (string) ($response['payment_id'] ?? $donation->id),
            payload: $response,
        );
    }

    public function handleCallback(array $payload): ?Donation
    {
        $donationId = (int) Arr::get($payload, 'merchant_order_id', Arr::get($payload, 'obj.order.merchant_order_id', Arr::get($payload, 'id')));

        if ($donationId === 0) {
            return null;
        }

        $donation = Donation::query()->find($donationId);

        if ($donation === null) {
            return null;
        }

        $verification = $this->paymobPayment->verify((string) $donationId);
        $isSuccessful = (bool) ($verification['success'] ?? false);
        $transactionId = (string) ($verification['payment_id'] ?? Arr::get($payload, 'id', Arr::get($payload, 'obj.id', $donation->transaction_id)));

        $donation->update([
            'status' => $isSuccessful ? DonationStatus::Paid : DonationStatus::Failed,
            'transaction_id' => $transactionId,
            'paid_at' => $isSuccessful ? now() : null,
        ]);

        return $donation;
    }
}
