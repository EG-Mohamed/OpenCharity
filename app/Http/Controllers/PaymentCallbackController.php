<?php

namespace App\Http\Controllers;

use App\Contracts\PaymentGateway;
use App\Enums\DonationStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PaymentCallbackController extends Controller
{
    public function __invoke(Request $request, PaymentGateway $paymentGateway): RedirectResponse
    {
        $donation = $paymentGateway->handleCallback($request->all());

        if ($donation?->status === DonationStatus::Paid) {
            return redirect()->route('payments.success', $donation);
        }

        return redirect()->route('donation-cases', [
            'payment' => $donation?->status?->value,
            'target' => $donation?->donation_target_id,
        ])->with('payment_status', $donation?->status?->value);
    }
}
