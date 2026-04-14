<?php

namespace Database\Factories;

use App\Enums\AssistanceUnitType;
use App\Models\AssistanceType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AssistanceTypeFactory extends Factory
{
    protected $model = AssistanceType::class;

    public function definition(): array
    {
        $name = fake()->unique()->words(2, true);

        return [
            'name' => Str::title($name),
            'code' => 'AST-'.fake()->unique()->numerify('###'),
            'description' => fake()->sentence(),
            'unit_type' => fake()->randomElement(AssistanceUnitType::cases()),
            'is_recurring_allowed' => fake()->boolean(50),
            'is_active' => fake()->boolean(90),
        ];
    }
}
