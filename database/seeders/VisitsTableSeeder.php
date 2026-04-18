<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VisitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visits')->delete();
        
        \DB::table('visits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'family_id' => 1,
                'family_member_id' => 1,
                'charity_case_id' => 1,
                'visit_type' => 'field_visit',
                'status' => 'completed',
                'scheduled_at' => NULL,
                'visited_at' => '2026-04-16 00:00:00',
                'summary' => NULL,
                'findings' => NULL,
                'recommendations' => NULL,
                'next_visit_at' => '2027-04-16 00:00:00',
                'notes' => NULL,
                'created_at' => '2026-04-16 02:32:49',
                'updated_at' => '2026-04-18 00:01:11',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'family_id' => 2,
                'family_member_id' => 3,
                'charity_case_id' => 2,
                'visit_type' => 'phone_call',
                'status' => 'completed',
                'scheduled_at' => NULL,
                'visited_at' => '2026-04-18 00:00:00',
                'summary' => 'بدون مخلص',
                'findings' => 'بدون نتائج',
                'recommendations' => 'بدون توصيات',
                'next_visit_at' => '2027-04-18 00:00:00',
                'notes' => NULL,
                'created_at' => '2026-04-18 00:36:10',
                'updated_at' => '2026-04-18 00:36:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}