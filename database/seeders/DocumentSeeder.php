<?php

namespace Database\Seeders;

use App\Models\CharityCase;
use App\Models\Document;
use App\Models\Family;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    public function run(): void
    {
        Family::query()->each(function (Family $family): void {
            Document::factory()->count(fake()->numberBetween(1, 3))->create([
                'family_id' => $family->id,
            ]);
        });

        CharityCase::query()->each(function (CharityCase $charityCase): void {
            Document::factory()->count(fake()->numberBetween(0, 2))->create([
                'family_id' => $charityCase->family_id,
                'charity_case_id' => $charityCase->id,
            ]);
        });
    }
}
