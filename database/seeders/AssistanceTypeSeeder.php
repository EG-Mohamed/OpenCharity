<?php

namespace Database\Seeders;

use App\Models\AssistanceType;
use Illuminate\Database\Seeder;

class AssistanceTypeSeeder extends Seeder
{
    public function run(): void
    {
        AssistanceType::factory()->count(5)->create();
    }
}
