<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CaseTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('case_types')->delete();
        
        \DB::table('case_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'إيجار',
                'code' => 'CT-XG9MC',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-04-16 01:24:50',
                'updated_at' => '2026-04-16 01:24:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'مساعدات زواج',
                'code' => 'CT-HYBUF',
                'description' => NULL,
                'is_active' => 0,
                'created_at' => '2026-04-16 01:24:57',
                'updated_at' => '2026-04-18 13:40:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'علاج',
                'code' => 'CT-569VY',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-04-16 01:25:01',
                'updated_at' => '2026-04-16 01:25:01',
            ),
        ));
        
        
    }
}