<?php

namespace Database\Factories;

use App\Enums\DonationTargetStatus;
use App\Enums\DonationTargetType;
use App\Models\CharityCase;
use App\Models\DonationTarget;
use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DonationTargetFactory extends Factory
{
    protected $model = DonationTarget::class;

    public function definition(): array
    {
        $title = fake()->sentence(3);

        return [
            'type' => fake()->randomElement(DonationTargetType::cases()),
            'family_id' => fake()->boolean(50) ? Family::factory() : null,
            'charity_case_id' => fake()->boolean(50) ? CharityCase::factory() : null,
            'title' => $title,
            'slug' => Str::slug($title).'-'.fake()->unique()->numerify('###'),
            'description' => fake()->paragraph(),
            'goal_amount' => fake()->randomFloat(2, 1000, 100000),
            'collected_amount' => fake()->randomFloat(2, 0, 50000),
            'status' => fake()->randomElement(DonationTargetStatus::cases()),
            'starts_at' => fake()->dateTimeBetween('-2 months', 'now'),
            'ends_at' => fake()->optional()->dateTimeBetween('now', '+4 months'),
        ];
    }
}
