<?php

namespace App\Services\Payment;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PaymobPayment
{
    private array $config;

    public function __construct()
    {
        $this->config = [
            'api_key' => config('services.paymob.PAYMOB_API_KEY'),
            'public_key' => config('services.paymob.PAYMOB_PUBLIC_KEY'),
            'secret_key' => config('services.paymob.PAYMOB_SECRET_KEY'),
            'integration_id' => config('services.paymob.PAYMOB_INTEGRATION_ID'),
            'currency' => config('services.paymob.PAYMOB_CURRENCY', 'EGP'),
            'hmac' => config('services.paymob.PAYMOB_HMAC'),
        ];
    }

    public function pay(array $paymentData, string $redirectUrl): array
    {
        $this->validatePaymentData($paymentData);

        $paymentId = $paymentData['payment_id'] ?? $this->generatePaymentId();
        $integrations = $this->parseIntegrations();
        $response = $this->createPaymentIntention($paymentData, $paymentId, $integrations, $redirectUrl);

        return $this->formatPaymentResponse($response);
    }

    public function verify(string $merchantOrderId): array
    {
        $check = Http::withToken($this->getAuthToken())
            ->connectTimeout(10)
            ->timeout(30)
            ->retry(2, 500)
            ->post('https://accept.paymob.com/api/ecommerce/orders/transaction_inquiry', [
                'merchant_order_id' => $merchantOrderId,
            ]);

        return [
            'success' => (bool) ($check->json('success') && ! $check->json('error_occured', true)),
            'payment_id' => $check->json('id'),
            'order_id' => $merchantOrderId,
            'metadata' => $check->json(),
        ];
    }

    public function refund(string $transactionId, float $amount): array
    {
        $response = Http::withHeaders(['content-type' => 'application/json'])
            ->connectTimeout(10)
            ->timeout(30)
            ->retry(2, 500)
            ->post('https://accept.paymob.com/api/acceptance/void_refund/refund', [
                'auth_token' => $this->getAuthToken(),
                'transaction_id' => $transactionId,
                'amount_cents' => (int) round($amount * 100),
            ])
            ->json();

        return [
            'success' => isset($response['id']),
            'transaction_id' => $transactionId,
            'amount' => $amount,
            'response' => $response,
        ];
    }

    private function validatePaymentData(array $data): void
    {
        $required = ['amount', 'user_first_name', 'user_last_name', 'user_email', 'user_phone'];

        foreach ($required as $field) {
            if (blank($data[$field] ?? null)) {
                throw new \InvalidArgumentException("Missing required field: {$field}");
            }
        }
    }

    private function generatePaymentId(): string
    {
        return Str::uuid()->toString();
    }

    private function parseIntegrations(): array
    {
        return array_map(static fn ($integration): int|string => is_numeric($integration) ? (int) $integration : $integration, explode(',', (string) $this->config['integration_id']));
    }

    private function createPaymentIntention(array $data, string $paymentId, array $integrations, string $redirectUrl): Response
    {
        return Http::withHeaders(['Authorization' => 'Token '.$this->config['secret_key']])
            ->connectTimeout(10)
            ->timeout(30)
            ->retry(2, 500)
            ->post('https://accept.paymob.com/v1/intention/', [
                'amount' => (int) round($data['amount'] * 100),
                'currency' => $this->config['currency'],
                'payment_methods' => $integrations,
                'billing_data' => [
                    'first_name' => $data['user_first_name'],
                    'last_name' => $data['user_last_name'],
                    'phone_number' => $data['user_phone'],
                    'email' => $data['user_email'],
                ],
                'special_reference' => $paymentId,
                'expiration' => 3600,
                'redirection_url' => $redirectUrl,
            ]);
    }

    private function formatPaymentResponse(Response $response): array
    {
        $json = $response->json();

        if (isset($json['client_secret'])) {
            return [
                'success' => true,
                'payment_id' => data_get($json, 'special_reference'),
                'redirect_url' => 'https://accept.paymob.com/unifiedcheckout/?publicKey='.$this->config['public_key'].'&clientSecret='.$json['client_secret'],
                'metadata' => $json,
            ];
        }

        return [
            'success' => false,
            'payment_id' => data_get($json, 'special_reference'),
            'redirect_url' => '',
            'error' => 'Failed to create payment intention',
            'metadata' => $json,
        ];
    }

    private function getAuthToken(): ?string
    {
        $response = Http::withHeaders(['content-type' => 'application/json'])
            ->connectTimeout(10)
            ->timeout(30)
            ->retry(2, 500)
            ->post('https://accept.paymobsolutions.com/api/auth/tokens', [
                'api_key' => $this->config['api_key'],
            ])
            ->json();

        return data_get($response, 'token');
    }
}
