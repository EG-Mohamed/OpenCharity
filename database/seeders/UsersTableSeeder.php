<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'email_verified_at' => '2026-04-14 22:04:06',
                'password' => '$2y$12$0.WI1YuHKZ9AQldKauNbYOLblckqGeOVLB97y5O85OaMZcWMwaJ4u',
                'remember_token' => 'JH9t73gonn',
                'created_at' => '2026-04-14 22:04:06',
                'updated_at' => '2026-04-14 22:04:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ahmed',
                'email' => 'ex@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$6jjHdY2VtZJMHF9QsCe/XOvYvAyJITZOjzQgfVR9G0xLKg7nIdkBK',
                'remember_token' => 'HYyGlvFOsapGL4tcDurMbBQkRSAjK2OZFsWeoak5wiPfe6AqjYeIOu7HEXDw',
                'created_at' => '2026-04-16 18:53:08',
                'updated_at' => '2026-04-18 13:37:53',
            ),
        ));
        
        
    }
}