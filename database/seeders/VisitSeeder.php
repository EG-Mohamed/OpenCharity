<?php

namespace Database\Seeders;

use App\Models\CharityCase;
use App\Models\Visit;
use Illuminate\Database\Seeder;

class VisitSeeder extends Seeder
{
    public function run(): void
    {
        CharityCase::query()->each(function (CharityCase $charityCase): void {
            Visit::factory()->count(fake()->numberBetween(0, 3))->create([
                'charity_case_id' => $charityCase->id,
            ]);
        });
    }
}
