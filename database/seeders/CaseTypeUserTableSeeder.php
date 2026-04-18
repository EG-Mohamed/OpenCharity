<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CaseTypeUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('case_type_user')->delete();
        
        \DB::table('case_type_user')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'case_type_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'case_type_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}