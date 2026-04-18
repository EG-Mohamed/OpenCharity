<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('documents')->delete();
        
        \DB::table('documents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'family_id' => 1,
                'charity_case_id' => 1,
                'type' => 'social_research',
                'category' => 'committee',
                'title' => '213',
                'file_path' => '01KPEK21KJ9FSABHBN630XRFC9.jpg',
                'visibility' => 'family_only',
                'issued_at' => '2026-04-01',
                'expires_at' => '2026-04-16',
                'is_required' => 1,
                'is_verified' => 1,
                'notes' => NULL,
                'created_at' => '2026-04-17 22:45:29',
                'updated_at' => '2026-04-17 22:45:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'family_id' => 2,
                'charity_case_id' => 2,
                'type' => 'national_id',
                'category' => 'identity',
                'title' => 'عنوان المستند',
                'file_path' => '01KPESDJ74DX9P8VJZMPAX8A2J.jpg',
                'visibility' => 'case_only',
                'issued_at' => '2001-04-18',
                'expires_at' => '2028-04-18',
                'is_required' => 1,
                'is_verified' => 1,
                'notes' => NULL,
                'created_at' => '2026-04-18 00:36:37',
                'updated_at' => '2026-04-18 00:36:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}