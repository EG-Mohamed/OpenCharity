<?php

namespace Database\Factories;

use App\Enums\VisitStatus;
use App\Enums\VisitType;
use App\Models\CharityCase;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    protected $model = Visit::class;

    public function definition(): array
    {
        $scheduledAt = fake()->dateTimeBetween('-1 month', '+2 weeks');
        $visitedAt = $scheduledAt <= now() && fake()->boolean(60)
            ? fake()->dateTimeBetween($scheduledAt, 'now')
            : null;

        return [
            'charity_case_id' => CharityCase::factory(),
            'visit_type' => fake()->randomElement(VisitType::cases()),
            'status' => fake()->randomElement(VisitStatus::cases()),
            'scheduled_at' => $scheduledAt,
            'visited_at' => $visitedAt,
            'summary' => fake()->optional()->sentence(),
            'findings' => fake()->optional()->paragraph(),
            'recommendations' => fake()->optional()->paragraph(),
            'next_visit_at' => fake()->boolean(50) ? fake()->dateTimeBetween('now', '+1 month') : null,
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
