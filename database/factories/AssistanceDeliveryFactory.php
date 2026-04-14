<?php

namespace Database\Factories;

use App\Enums\DeliveryStatus;
use App\Models\AssistanceDelivery;
use App\Models\AssistanceSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssistanceDeliveryFactory extends Factory
{
    protected $model = AssistanceDelivery::class;

    public function definition(): array
    {
        return [
            'assistance_schedule_id' => AssistanceSchedule::factory(),
            'delivered_at' => fake()->boolean(60) ? fake()->dateTimeBetween('-1 month', 'now') : null,
            'delivery_status' => fake()->randomElement(DeliveryStatus::cases()),
            'received_by_name' => fake()->optional()->name(),
            'received_by_phone' => fake()->optional()->phoneNumber(),
            'proof_file_path' => fake()->optional()->passthrough('proofs/'.fake()->uuid().'.jpg'),
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
