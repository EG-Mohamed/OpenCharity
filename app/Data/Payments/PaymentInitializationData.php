<?php

namespace App\Data\Payments;

readonly class PaymentInitializationData
{
    public function __construct(
        public string $currency,
        public string $returnUrl,
        public string $callbackUrl,
    ) {}
}
