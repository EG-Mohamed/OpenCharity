<?php

namespace Database\Factories;

use App\Models\Nationality;
use Illuminate\Database\Eloquent\Factories\Factory;

class NationalityFactory extends Factory
{
    protected $model = Nationality::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->country(),
            'is_active' => fake()->boolean(85),
        ];
    }
}
