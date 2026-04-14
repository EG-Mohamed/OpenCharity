<?php

namespace Database\Factories;

use App\Models\CaseType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CaseTypeFactory extends Factory
{
    protected $model = CaseType::class;

    public function definition(): array
    {
        $name = fake()->unique()->words(2, true);

        return [
            'name' => Str::title($name),
            'code' => Str::upper(Str::slug($name, '_')),
            'description' => fake()->sentence(),
            'is_active' => fake()->boolean(85),
        ];
    }
}
