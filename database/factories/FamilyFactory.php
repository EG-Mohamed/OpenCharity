<?php

namespace Database\Factories;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use App\Models\City;
use App\Models\Family;
use App\Models\Neighborhood;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyFactory extends Factory
{
    protected $model = Family::class;

    public function definition(): array
    {
        $state = State::query()->inRandomOrder()->first();
        $city = $state ? City::query()->where('state_id', $state->id)->inRandomOrder()->first() : null;
        $neighborhood = $city ? Neighborhood::query()->where('city_id', $city->id)->inRandomOrder()->first() : null;

        return [
            'code' => 'FAM-'.fake()->unique()->numerify('#####'),
            'name' => fake()->lastName().' '.__('Family'),
            'primary_contact_name' => fake()->name(),
            'primary_contact_phone' => fake()->phoneNumber(),
            'secondary_contact_phone' => fake()->optional()->phoneNumber(),
            'national_id' => fake()->optional()->numerify('##############'),
            'state_id' => $state?->id,
            'city_id' => $city?->id,
            'neighborhood_id' => $neighborhood?->id,
            'address' => fake()->address(),
            'latitude' => fake()->optional()->latitude(),
            'longitude' => fake()->optional()->longitude(),
            'housing_status' => fake()->randomElement(HousingStatus::cases()),
            'monthly_income' => fake()->randomFloat(2, 0, 30000),
            'members_count' => fake()->numberBetween(1, 8),
            'notes' => fake()->optional()->sentence(),
            'status' => fake()->randomElement(FamilyStatus::cases()),
        ];
    }
}
