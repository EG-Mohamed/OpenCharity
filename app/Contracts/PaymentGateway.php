<?php

namespace App\Contracts;

use App\Data\Payments\PaymentInitializationData;
use App\Data\Payments\PaymentInitializationResult;
use App\Models\Donation;

interface PaymentGateway
{
    public function initialize(Donation $donation, PaymentInitializationData $data): PaymentInitializationResult;

    public function handleCallback(array $payload): ?Donation;
}
