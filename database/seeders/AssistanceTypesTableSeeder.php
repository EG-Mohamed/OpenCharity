<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssistanceTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('assistance_types')->delete();
        
        \DB::table('assistance_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'مبلغ مالي',
                'code' => 'AT-XP824',
                'description' => NULL,
                'unit_type' => 'amount',
                'is_recurring_allowed' => 1,
                'is_active' => 1,
                'created_at' => '2026-04-16 04:12:35',
                'updated_at' => '2026-04-16 04:12:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'إيجار',
                'code' => 'AT-DPVE7',
                'description' => NULL,
                'unit_type' => 'amount',
                'is_recurring_allowed' => 1,
                'is_active' => 1,
                'created_at' => '2026-04-16 04:12:53',
                'updated_at' => '2026-04-16 04:12:53',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'علاج',
                'code' => 'AT-ABENJ',
                'description' => NULL,
                'unit_type' => 'service',
                'is_recurring_allowed' => 1,
                'is_active' => 1,
                'created_at' => '2026-04-16 04:13:02',
                'updated_at' => '2026-04-16 04:13:02',
            ),
        ));
        
        
    }
}