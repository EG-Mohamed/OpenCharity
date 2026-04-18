<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiseaseFamilyMemberTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('disease_family_member')->delete();
        
        \DB::table('disease_family_member')->insert(array (
            0 => 
            array (
                'disease_id' => 1,
                'family_member_id' => 2,
            ),
            1 => 
            array (
                'disease_id' => 2,
                'family_member_id' => 2,
            ),
            2 => 
            array (
                'disease_id' => 3,
                'family_member_id' => 2,
            ),
            3 => 
            array (
                'disease_id' => 1,
                'family_member_id' => 3,
            ),
            4 => 
            array (
                'disease_id' => 2,
                'family_member_id' => 3,
            ),
        ));
        
        
    }
}