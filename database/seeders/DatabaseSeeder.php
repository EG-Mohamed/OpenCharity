<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('123456789'),
        ]);

        $this->call([
            CaseTypeSeeder::class,
            AssistanceTypeSeeder::class,
            FamilySeeder::class,
            FamilyMemberSeeder::class,
            CharityCaseSeeder::class,
            VisitSeeder::class,
            DocumentSeeder::class,
            AssistanceScheduleSeeder::class,
            AssistanceDeliverySeeder::class,
            DonationTargetSeeder::class,
            DonationSeeder::class,
        ]);
    }
}
