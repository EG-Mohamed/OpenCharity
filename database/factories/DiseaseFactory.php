<?php

namespace Database\Factories;

use App\Models\Disease;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiseaseFactory extends Factory
{
    protected $model = Disease::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(2, true),
            'is_chronic' => fake()->boolean(40),
            'is_active' => fake()->boolean(85),
        ];
    }
}
