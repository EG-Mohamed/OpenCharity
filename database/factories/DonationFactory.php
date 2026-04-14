<?php

namespace Database\Factories;

use App\Enums\Currency;
use App\Enums\DonationStatus;
use App\Enums\PaymentGateway;
use App\Enums\PaymentMethod;
use App\Models\Donation;
use App\Models\DonationTarget;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition(): array
    {
        $transactionId = fake()->boolean(70) ? fake()->unique()->uuid() : null;

        return [
            'donation_target_id' => DonationTarget::factory(),
            'donor_name' => fake()->name(),
            'donor_email' => fake()->safeEmail(),
            'donor_phone' => fake()->phoneNumber(),
            'amount' => fake()->randomFloat(2, 50, 20000),
            'currency' => fake()->randomElement(Currency::cases()),
            'status' => fake()->randomElement(DonationStatus::cases()),
            'payment_gateway' => fake()->randomElement(PaymentGateway::cases()),
            'payment_method' => fake()->randomElement(PaymentMethod::cases()),
            'transaction_id' => $transactionId,
            'paid_at' => fake()->boolean(70) ? fake()->dateTimeBetween('-1 month', 'now') : null,
            'anonymous' => fake()->boolean(20),
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
