<?php

namespace Database\Seeders;

use App\Models\CaseType;
use App\Models\CharityCase;
use App\Models\Family;
use Illuminate\Database\Seeder;

class CharityCaseSeeder extends Seeder
{
    public function run(): void
    {
        $caseTypes = CaseType::all();

        Family::query()->each(function (Family $family) use ($caseTypes): void {
            CharityCase::factory()->count(fake()->numberBetween(1, 3))->create([
                'family_id' => $family->id,
                'case_type_id' => $caseTypes->random()->id,
            ]);
        });
    }
}
