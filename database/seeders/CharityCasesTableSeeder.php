<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CharityCasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('charity_cases')->delete();
        
        \DB::table('charity_cases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'family_id' => 1,
                'case_type_id' => 3,
                'code' => 'C-001-0001',
                'description' => NULL,
                'priority' => 'high',
                'status' => 'approved',
                'visit_status' => 'not_required',
                'registered_at' => '2026-04-16 18:40:39',
                'reviewed_at' => NULL,
                'approved_at' => NULL,
                'closed_at' => NULL,
                'last_visit_at' => '2026-04-16 00:00:00',
                'next_visit_at' => NULL,
                'requested_amount' => '5000.00',
                'approved_amount' => '500.00',
                'notes' => NULL,
                'created_at' => '2026-04-16 18:40:39',
                'updated_at' => '2026-04-18 00:01:11',
                'deleted_at' => NULL,
                'family_member_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'family_id' => 2,
                'case_type_id' => 2,
                'code' => 'C-002-0002',
                'description' => NULL,
                'priority' => 'high',
                'status' => 'approved',
                'visit_status' => 'completed',
                'registered_at' => '2026-04-18 00:35:19',
                'reviewed_at' => NULL,
                'approved_at' => NULL,
                'closed_at' => NULL,
                'last_visit_at' => '2026-04-18 00:00:00',
                'next_visit_at' => NULL,
                'requested_amount' => '1000.00',
                'approved_amount' => '1000.00',
                'notes' => NULL,
                'created_at' => '2026-04-18 00:35:19',
                'updated_at' => '2026-04-18 14:23:01',
                'deleted_at' => NULL,
                'family_member_id' => 3,
            ),
        ));
        
        
    }
}