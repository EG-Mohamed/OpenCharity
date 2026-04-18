<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FamilyMembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('family_members')->delete();
        
        \DB::table('family_members')->insert(array (
            0 => 
            array (
                'id' => 1,
                'family_id' => 1,
                'name' => 'محمود',
                'relation_to_head' => 'head',
                'gender' => 'male',
                'birth_date' => '1998-01-01',
                'marital_status' => 'single',
                'education_status' => 'university',
                'employment_status' => 'employed',
                'health_status' => 'healthy',
                'is_refugee' => 0,
                'nationality_id' => NULL,
                'monthly_income' => '464.00',
                'national_id' => '29801012123916',
                'phone' => NULL,
                'notes' => NULL,
                'created_at' => '2026-04-16 18:37:35',
                'updated_at' => '2026-04-16 18:37:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'family_id' => 1,
                'name' => 'مدحت السيد احمد حسن',
                'relation_to_head' => 'son',
                'gender' => 'male',
                'birth_date' => '2010-06-09',
                'marital_status' => 'single',
                'education_status' => 'secondary',
                'employment_status' => 'unemployed',
                'health_status' => 'unhealthy',
                'is_refugee' => 0,
                'nationality_id' => 167,
                'monthly_income' => '0.00',
                'national_id' => 'A45648798',
                'phone' => NULL,
                'notes' => NULL,
                'created_at' => '2026-04-18 00:30:57',
                'updated_at' => '2026-04-18 21:59:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'family_id' => 2,
                'name' => 'حمودة السيد',
                'relation_to_head' => 'head',
                'gender' => 'male',
                'birth_date' => '1990-04-18',
                'marital_status' => 'married',
                'education_status' => 'none',
                'employment_status' => 'unable_to_work',
                'health_status' => 'unhealthy',
                'is_refugee' => 1,
                'nationality_id' => 55,
                'monthly_income' => '0.00',
                'national_id' => 'A47897',
                'phone' => '+201094619204',
                'notes' => NULL,
                'created_at' => '2026-04-18 00:35:05',
                'updated_at' => '2026-04-18 01:24:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}