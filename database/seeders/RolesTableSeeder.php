<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'super_admin',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:54',
                'updated_at' => '2026-04-16 18:53:54',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '123',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 13:38:05',
                'updated_at' => '2026-04-18 13:38:05',
            ),
        ));
        
        
    }
}