<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => '019d93da-a274-73ca-99b0-4389b112c51a',
                'name' => '{"ar": "القاهرة"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:32',
                'updated_at' => '2026-04-16 03:14:32',
            ),
            1 => 
            array (
                'id' => '019d93da-a313-73a4-8294-61b51a6e1907',
                'name' => '{"ar": "الاسكندرية"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:32',
                'updated_at' => '2026-04-16 03:14:32',
            ),
            2 => 
            array (
                'id' => '019d93da-a350-7164-8998-f75d3d13b461',
                'name' => '{"ar": "بورسعيد"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:32',
                'updated_at' => '2026-04-16 03:14:32',
            ),
            3 => 
            array (
                'id' => '019d93da-a362-7356-9ad6-5d7819bb5fa0',
                'name' => '{"ar": "السويس"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:32',
                'updated_at' => '2026-04-16 03:14:32',
            ),
            4 => 
            array (
                'id' => '019d93da-a36d-7286-b11b-e07aa49f0287',
                'name' => '{"ar": "دمياط"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:32',
                'updated_at' => '2026-04-16 03:14:32',
            ),
            5 => 
            array (
                'id' => '019d93da-a39a-7047-b4dc-2d0842dd8324',
                'name' => '{"ar": "الدقهليه"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:32',
                'updated_at' => '2026-04-16 03:14:32',
            ),
            6 => 
            array (
                'id' => '019d93da-a481-7027-8755-d33b45a3b9dd',
                'name' => '{"ar": "الشرقيه"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:32',
                'updated_at' => '2026-04-16 03:14:32',
            ),
            7 => 
            array (
                'id' => '019d93da-a552-7365-87ff-4720ac5bfa43',
                'name' => '{"ar": "القليوبيه"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:33',
                'updated_at' => '2026-04-16 03:14:33',
            ),
            8 => 
            array (
                'id' => '019d93da-a5a0-72ea-8d75-55471a808764',
                'name' => '{"ar": "كفر الشيخ"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:33',
                'updated_at' => '2026-04-16 03:14:33',
            ),
            9 => 
            array (
                'id' => '019d93da-a5f8-71a5-a42d-39389e731a37',
                'name' => '{"ar": "الغربيه"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:33',
                'updated_at' => '2026-04-16 03:14:33',
            ),
            10 => 
            array (
                'id' => '019d93da-a68d-72d2-90ee-b8b8b26ec8d9',
                'name' => '{"ar": "المنوفيه"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:33',
                'updated_at' => '2026-04-16 03:14:33',
            ),
            11 => 
            array (
                'id' => '019d93da-a70a-709a-bd0c-1d9a3ad48d21',
                'name' => '{"ar": "البحيره"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:33',
                'updated_at' => '2026-04-16 03:14:33',
            ),
            12 => 
            array (
                'id' => '019d93da-a8ae-7233-8910-567faa8fadc8',
                'name' => '{"ar": "الاسماعيلية"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:34',
                'updated_at' => '2026-04-16 03:14:34',
            ),
            13 => 
            array (
                'id' => '019d93da-a8da-73ce-876c-55a2f47a5eda',
                'name' => '{"ar": "الجيزه"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:34',
                'updated_at' => '2026-04-16 03:14:34',
            ),
            14 => 
            array (
                'id' => '019d93da-a962-722e-89f6-d9dfcc036f5f',
                'name' => '{"ar": "بني سويف"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:34',
                'updated_at' => '2026-04-16 03:14:34',
            ),
            15 => 
            array (
                'id' => '019d93da-aa2c-7014-ac2e-e3f9b851af52',
                'name' => '{"ar": "الفيوم"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:34',
                'updated_at' => '2026-04-16 03:14:34',
            ),
            16 => 
            array (
                'id' => '019d93da-aaef-70a4-89b4-9b61377e6017',
                'name' => '{"ar": "المنيا"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:34',
                'updated_at' => '2026-04-16 03:14:34',
            ),
            17 => 
            array (
                'id' => '019d93da-abe8-7256-bedd-a7481cfc9b01',
                'name' => '{"ar": "اسيوط"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:34',
                'updated_at' => '2026-04-16 03:14:34',
            ),
            18 => 
            array (
                'id' => '019d93da-ac54-7195-a0f7-709342410965',
                'name' => '{"ar": "سوهاج"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:34',
                'updated_at' => '2026-04-16 03:14:34',
            ),
            19 => 
            array (
                'id' => '019d93da-acc4-70ec-b8b0-b4bd1dc64a68',
                'name' => '{"ar": "قنا"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:35',
                'updated_at' => '2026-04-16 03:14:35',
            ),
            20 => 
            array (
                'id' => '019d93da-ad14-709c-8ca3-39506b620525',
                'name' => '{"ar": "اسوان"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:35',
                'updated_at' => '2026-04-16 03:14:35',
            ),
            21 => 
            array (
                'id' => '019d93da-adb2-7384-a069-35e2165c4e41',
                'name' => '{"ar": "الاقصر"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:35',
                'updated_at' => '2026-04-16 03:14:35',
            ),
            22 => 
            array (
                'id' => '019d93da-aded-7171-825f-fe368b8ca37d',
                'name' => '{"ar": "البحر الاحمر"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:35',
                'updated_at' => '2026-04-16 03:14:35',
            ),
            23 => 
            array (
                'id' => '019d93da-adff-7286-af3d-be22368249ec',
                'name' => '{"ar": "الوادى الجديد"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:35',
                'updated_at' => '2026-04-16 03:14:35',
            ),
            24 => 
            array (
                'id' => '019d93da-af25-734c-9bf9-0009a847c446',
                'name' => '{"ar": "مطروح"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:35',
                'updated_at' => '2026-04-16 03:14:35',
            ),
            25 => 
            array (
                'id' => '019d93da-af4e-719e-805e-05eaf2f13500',
                'name' => '{"ar": "شمال سيناء"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:35',
                'updated_at' => '2026-04-16 03:14:35',
            ),
            26 => 
            array (
                'id' => '019d93da-afdb-70e0-8dbd-6c7f5b4a8efa',
                'name' => '{"ar": "جنوب سيناء"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:35',
                'updated_at' => '2026-04-16 03:14:35',
            ),
            27 => 
            array (
                'id' => '019d93da-b0f2-7382-8a0c-533f32fa8c67',
                'name' => '{"ar": "خارج ج م ع"}',
                'status' => 1,
                'created_at' => '2026-04-16 03:14:36',
                'updated_at' => '2026-04-16 03:14:36',
            ),
        ));
        
        
    }
}