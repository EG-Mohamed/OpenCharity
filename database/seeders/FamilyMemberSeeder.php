<?php

namespace Database\Seeders;

use App\Models\Family;
use App\Models\FamilyMember;
use Illuminate\Database\Seeder;

class FamilyMemberSeeder extends Seeder
{
    public function run(): void
    {
        Family::query()->each(function (Family $family): void {
            FamilyMember::factory()->count(fake()->numberBetween(2, 6))->create([
                'family_id' => $family->id,
            ]);
        });
    }
}
