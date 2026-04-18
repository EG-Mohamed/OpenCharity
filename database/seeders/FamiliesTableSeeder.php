<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('families')->delete();
        
        \DB::table('families')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'F-001',
                'name' => 'اسرة محمود السيد ابراهيم',
                'primary_contact_name' => 'اسرة محمود السيد ابراهيم',
                'primary_contact_phone' => '+201141173045',
                'secondary_contact_phone' => NULL,
                'address' => NULL,
                'housing_status' => 'owned',
                'notes' => NULL,
                'status' => 'active',
                'created_at' => '2026-04-16 18:34:00',
                'updated_at' => '2026-04-18 21:59:48',
                'deleted_at' => NULL,
                'state_id' => '019d93da-a274-73ca-99b0-4389b112c51a',
                'city_id' => '019d93da-a282-721b-ab89-1fb8ad086948',
                'neighborhood_id' => '019d93da-a283-7095-bdd0-e65fb265a157',
                'latitude' => '24.5708552',
                'longitude' => '46.8992615',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'F-002',
                'name' => 'اسرة حمودة',
                'primary_contact_name' => 'اسرة حمودة',
                'primary_contact_phone' => '+201094619204',
                'secondary_contact_phone' => NULL,
                'address' => NULL,
                'housing_status' => 'rented',
                'notes' => NULL,
                'status' => 'active',
                'created_at' => '2026-04-18 00:33:55',
                'updated_at' => '2026-04-18 21:59:41',
                'deleted_at' => NULL,
                'state_id' => '019d93da-a362-7356-9ad6-5d7819bb5fa0',
                'city_id' => '019d93da-a36b-72e0-9578-7d2127d03a25',
                'neighborhood_id' => '019d93da-a36b-72e0-9578-7d2127fc907c',
                'latitude' => '23.9561363',
                'longitude' => '46.9995117',
            ),
        ));
        
        
    }
}