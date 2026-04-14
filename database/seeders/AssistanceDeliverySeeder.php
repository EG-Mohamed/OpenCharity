<?php

namespace Database\Seeders;

use App\Models\AssistanceDelivery;
use App\Models\AssistanceSchedule;
use Illuminate\Database\Seeder;

class AssistanceDeliverySeeder extends Seeder
{
    public function run(): void
    {
        AssistanceSchedule::query()->each(function (AssistanceSchedule $schedule): void {
            AssistanceDelivery::factory()->count(fake()->numberBetween(0, 2))->create([
                'assistance_schedule_id' => $schedule->id,
            ]);
        });
    }
}
