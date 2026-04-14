<?php

namespace Database\Factories;

use App\Enums\AllocationStatus;
use App\Models\AssistanceSchedule;
use App\Models\CharityCase;
use App\Models\Donation;
use App\Models\DonationAllocation;
use App\Models\DonationTarget;
use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationAllocationFactory extends Factory
{
    protected $model = DonationAllocation::class;

    public function definition(): array
    {
        return [
            'donation_id' => Donation::factory(),
            'donation_target_id' => fake()->boolean(60) ? DonationTarget::factory() : null,
            'family_id' => fake()->boolean(50) ? Family::factory() : null,
            'charity_case_id' => fake()->boolean(50) ? CharityCase::factory() : null,
            'assistance_schedule_id' => fake()->boolean(50) ? AssistanceSchedule::factory() : null,
            'amount' => fake()->randomFloat(2, 50, 10000),
            'allocation_status' => fake()->randomElement(AllocationStatus::cases()),
            'allocated_at' => fake()->boolean(70) ? fake()->dateTimeBetween('-1 month', 'now') : null,
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
