<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\DonationAllocation;
use App\Models\DonationTarget;
use Illuminate\Database\Seeder;

class DonationAllocationSeeder extends Seeder
{
    public function run(): void
    {
        $targets = DonationTarget::all();

        Donation::query()->each(function (Donation $donation) use ($targets): void {
            DonationAllocation::factory()->count(fake()->numberBetween(1, 2))->create([
                'donation_id' => $donation->id,
                'donation_target_id' => $donation->donation_target_id ?? $targets->random()?->id,
            ]);
        });
    }
}
