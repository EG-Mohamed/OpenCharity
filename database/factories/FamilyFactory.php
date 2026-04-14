<?php

namespace Database\Factories;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyFactory extends Factory
{
    protected $model = Family::class;

    public function definition(): array
    {
        return [
            'code' => 'FAM-'.fake()->unique()->numerify('#####'),
            'name' => fake()->lastName().' '.__('Family'),
            'primary_contact_name' => fake()->name(),
            'primary_contact_phone' => fake()->phoneNumber(),
            'secondary_contact_phone' => fake()->optional()->phoneNumber(),
            'national_id' => fake()->optional()->numerify('##############'),
            'governorate' => fake()->city(),
            'city' => fake()->city(),
            'district' => fake()->optional()->streetName(),
            'address' => fake()->address(),
            'housing_status' => fake()->randomElement(HousingStatus::cases()),
            'monthly_income' => fake()->randomFloat(2, 0, 30000),
            'members_count' => fake()->numberBetween(1, 8),
            'notes' => fake()->optional()->sentence(),
            'status' => fake()->randomElement(FamilyStatus::cases()),
        ];
    }
}
