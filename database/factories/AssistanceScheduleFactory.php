<?php

namespace Database\Factories;

use App\Enums\FundingStatus;
use App\Enums\ScheduleFrequency;
use App\Enums\ScheduleStatus;
use App\Models\AssistanceSchedule;
use App\Models\AssistanceType;
use App\Models\CharityCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssistanceScheduleFactory extends Factory
{
    protected $model = AssistanceSchedule::class;

    public function definition(): array
    {
        return [
            'charity_case_id' => CharityCase::factory(),
            'assistance_type_id' => AssistanceType::factory(),
            'scheduled_date' => fake()->dateTimeBetween('-1 month', '+2 months'),
            'scheduled_time' => fake()->time('H:i:s'),
            'amount' => fake()->optional()->randomFloat(2, 100, 15000),
            'quantity' => fake()->optional()->randomFloat(2, 1, 100),
            'frequency' => fake()->randomElement(ScheduleFrequency::cases()),
            'status' => fake()->randomElement(ScheduleStatus::cases()),
            'funding_status' => fake()->randomElement(FundingStatus::cases()),
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
