<?php

namespace App\Data\Payments;

readonly class PaymentInitializationResult
{
    public function __construct(
        public string $redirectUrl,
        public string $transactionId,
        public array $payload = [],
    ) {}
}
