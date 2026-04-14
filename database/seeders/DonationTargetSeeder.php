<?php

namespace Database\Seeders;

use App\Models\CharityCase;
use App\Models\DonationTarget;
use App\Models\Family;
use Illuminate\Database\Seeder;

class DonationTargetSeeder extends Seeder
{
    public function run(): void
    {
        Family::query()->each(function (Family $family): void {
            DonationTarget::factory()->count(fake()->numberBetween(0, 2))->create([
                'family_id' => $family->id,
                'charity_case_id' => null,
            ]);
        });

        CharityCase::query()->each(function (CharityCase $charityCase): void {
            DonationTarget::factory()->count(fake()->numberBetween(0, 2))->create([
                'family_id' => $charityCase->family_id,
                'charity_case_id' => $charityCase->id,
            ]);
        });
    }
}
