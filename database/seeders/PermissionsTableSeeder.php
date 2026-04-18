<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ViewAny:Role',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:48',
                'updated_at' => '2026-04-16 18:53:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'View:Role',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:48',
                'updated_at' => '2026-04-16 18:53:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Create:Role',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:48',
                'updated_at' => '2026-04-16 18:53:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Update:Role',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:48',
                'updated_at' => '2026-04-16 18:53:48',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Delete:Role',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:48',
                'updated_at' => '2026-04-16 18:53:48',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'DeleteAny:Role',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:48',
                'updated_at' => '2026-04-16 18:53:48',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ViewAny:AssistanceDelivery',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:50',
                'updated_at' => '2026-04-16 18:53:50',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'View:AssistanceDelivery',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:50',
                'updated_at' => '2026-04-16 18:53:50',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Create:AssistanceDelivery',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:50',
                'updated_at' => '2026-04-16 18:53:50',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Update:AssistanceDelivery',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:50',
                'updated_at' => '2026-04-16 18:53:50',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Delete:AssistanceDelivery',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:50',
                'updated_at' => '2026-04-16 18:53:50',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'DeleteAny:AssistanceDelivery',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:50',
                'updated_at' => '2026-04-16 18:53:50',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ViewAny:AssistanceSchedule',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'View:AssistanceSchedule',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Create:AssistanceSchedule',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Update:AssistanceSchedule',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Delete:AssistanceSchedule',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'DeleteAny:AssistanceSchedule',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'ViewAny:AssistanceType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'View:AssistanceType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Create:AssistanceType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Update:AssistanceType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Delete:AssistanceType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'DeleteAny:AssistanceType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'ViewAny:CaseType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'View:CaseType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Create:CaseType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Update:CaseType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Delete:CaseType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'DeleteAny:CaseType',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'ViewAny:CharityCase',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'View:CharityCase',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Create:CharityCase',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Update:CharityCase',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Delete:CharityCase',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'DeleteAny:CharityCase',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'ViewAny:City',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'View:City',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Create:City',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Update:City',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Delete:City',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'DeleteAny:City',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'ViewAny:Document',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'View:Document',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Create:Document',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Update:Document',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Delete:Document',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'DeleteAny:Document',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'ViewAny:DonationTarget',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'View:DonationTarget',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Create:DonationTarget',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Update:DonationTarget',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Delete:DonationTarget',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'DeleteAny:DonationTarget',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'ViewAny:Donation',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'View:Donation',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Create:Donation',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Update:Donation',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Delete:Donation',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'DeleteAny:Donation',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'ViewAny:Family',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'View:Family',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Create:Family',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Update:Family',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Delete:Family',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'DeleteAny:Family',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'ViewAny:FamilyMember',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'View:FamilyMember',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Create:FamilyMember',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Update:FamilyMember',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Delete:FamilyMember',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'DeleteAny:FamilyMember',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'ViewAny:Neighborhood',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'View:Neighborhood',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Create:Neighborhood',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Update:Neighborhood',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Delete:Neighborhood',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'DeleteAny:Neighborhood',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'ViewAny:State',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'View:State',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Create:State',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Update:State',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Delete:State',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'DeleteAny:State',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'ViewAny:User',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'View:User',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Create:User',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Update:User',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Delete:User',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'DeleteAny:User',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'ViewAny:Visit',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'View:Visit',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Create:Visit',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Update:Visit',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Delete:Visit',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'DeleteAny:Visit',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'View:AssistanceCalendar',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'View:AssistanceCalendarWidget',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 18:53:51',
                'updated_at' => '2026-04-16 18:53:51',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'View:TranslationManagerPage',
                'guard_name' => 'web',
                'created_at' => '2026-04-16 19:32:20',
                'updated_at' => '2026-04-16 19:32:20',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'ViewAny:Disease',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'View:Disease',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Create:Disease',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Update:Disease',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Delete:Disease',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'DeleteAny:Disease',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'ViewAny:Nationality',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'View:Nationality',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Create:Nationality',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Update:Nationality',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Delete:Nationality',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'DeleteAny:Nationality',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'View:SystemSettings',
                'guard_name' => 'web',
                'created_at' => '2026-04-18 00:18:11',
                'updated_at' => '2026-04-18 00:18:11',
            ),
        ));
        
        
    }
}