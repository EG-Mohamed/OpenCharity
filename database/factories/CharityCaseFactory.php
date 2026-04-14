<?php

namespace Database\Factories;

use App\Enums\CasePriority;
use App\Enums\CaseStatus;
use App\Enums\VisitStatusCase;
use App\Models\CaseType;
use App\Models\CharityCase;
use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharityCaseFactory extends Factory
{
    protected $model = CharityCase::class;

    public function definition(): array
    {
        $registeredAt = fake()->dateTimeBetween('-6 months', '-1 week');
        $reviewedAt = fake()->boolean(70) ? fake()->dateTimeBetween($registeredAt, 'now') : null;
        $approvedAt = $reviewedAt && fake()->boolean(50) ? fake()->dateTimeBetween($reviewedAt, 'now') : null;

        return [
            'family_id' => Family::factory(),
            'case_type_id' => CaseType::factory(),
            'code' => 'CASE-'.fake()->unique()->numerify('#####'),
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'priority' => fake()->randomElement(CasePriority::cases()),
            'status' => fake()->randomElement(CaseStatus::cases()),
            'visit_status' => fake()->randomElement(VisitStatusCase::cases()),
            'registered_at' => $registeredAt,
            'reviewed_at' => $reviewedAt,
            'approved_at' => $approvedAt,
            'closed_at' => fake()->boolean(20) ? fake()->dateTimeBetween('-1 month', 'now') : null,
            'last_visit_at' => fake()->boolean(60) ? fake()->dateTimeBetween('-2 months', 'now') : null,
            'next_visit_at' => fake()->boolean(50) ? fake()->dateTimeBetween('now', '+1 month') : null,
            'requested_amount' => fake()->randomFloat(2, 500, 50000),
            'approved_amount' => fake()->randomFloat(2, 0, 40000),
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
