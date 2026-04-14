<?php

namespace Database\Seeders;

use App\Models\AssistanceSchedule;
use App\Models\AssistanceType;
use App\Models\CharityCase;
use Illuminate\Database\Seeder;

class AssistanceScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $assistanceTypes = AssistanceType::all();

        CharityCase::query()->each(function (CharityCase $charityCase) use ($assistanceTypes): void {
            AssistanceSchedule::factory()->count(fake()->numberBetween(0, 2))->create([
                'charity_case_id' => $charityCase->id,
                'assistance_type_id' => $assistanceTypes->random()->id,
            ]);
        });
    }
}
