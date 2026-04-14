<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\DonationTarget;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    public function run(): void
    {
        DonationTarget::query()->each(function (DonationTarget $target): void {
            Donation::factory()->count(fake()->numberBetween(1, 4))->create([
                'donation_target_id' => $target->id,
            ]);
        });
    }
}
