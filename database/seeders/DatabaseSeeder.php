<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            RoleHasPermissionsTableSeeder::class,
            ModelHasRolesTableSeeder::class,
            ModelHasPermissionsTableSeeder::class,
            SettingsTableSeeder::class,
            CaseTypesTableSeeder::class,
            AssistanceTypesTableSeeder::class,
            NationalitiesTableSeeder::class,
            DiseasesTableSeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
            NeighborhoodsTableSeeder::class,
            FamiliesTableSeeder::class,
            FamilyMembersTableSeeder::class,
            DiseaseFamilyMemberTableSeeder::class,
            CharityCasesTableSeeder::class,
            CaseTypeUserTableSeeder::class,
            VisitsTableSeeder::class,
            DocumentsTableSeeder::class,
            AssistanceSchedulesTableSeeder::class,
            AssistanceDeliveriesTableSeeder::class,
            DonationTargetsTableSeeder::class,
            DonationsTableSeeder::class,
            ImportsTableSeeder::class,
            ExportsTableSeeder::class,
            FailedImportRowsTableSeeder::class,
        ]);
    }
}
