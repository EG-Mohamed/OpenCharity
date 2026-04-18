<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiseasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('diseases')->delete();
        
        \DB::table('diseases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'السكر',
                'is_chronic' => 1,
                'is_active' => 1,
                'created_at' => '2026-04-18 00:09:33',
                'updated_at' => '2026-04-18 00:09:33',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'الضغط',
                'is_chronic' => 1,
                'is_active' => 1,
                'created_at' => '2026-04-18 00:09:36',
                'updated_at' => '2026-04-18 00:09:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => ' الحروق البسيطة',
                'is_chronic' => 0,
                'is_active' => 1,
                'created_at' => '2026-04-18 00:09:55',
                'updated_at' => '2026-04-18 00:10:00',
            ),
        ));
        
        
    }
}