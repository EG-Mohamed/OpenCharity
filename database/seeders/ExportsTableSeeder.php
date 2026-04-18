<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exports')->delete();
        
        \DB::table('exports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'completed_at' => NULL,
                'file_disk' => 'local',
                'file_name' => 'export-1-documents',
                'exporter' => 'App\\Filament\\Exports\\DocumentExporter',
                'processed_rows' => 0,
                'total_rows' => 1,
                'successful_rows' => 0,
                'user_id' => 1,
                'created_at' => '2026-04-17 22:46:20',
                'updated_at' => '2026-04-17 22:46:20',
            ),
            1 => 
            array (
                'id' => 2,
                'completed_at' => '2026-04-17 22:46:35',
                'file_disk' => 'local',
                'file_name' => 'export-2-documents',
                'exporter' => 'App\\Filament\\Exports\\DocumentExporter',
                'processed_rows' => 1,
                'total_rows' => 1,
                'successful_rows' => 1,
                'user_id' => 1,
                'created_at' => '2026-04-17 22:46:35',
                'updated_at' => '2026-04-17 22:46:35',
            ),
            2 => 
            array (
                'id' => 3,
                'completed_at' => '2026-04-17 22:55:04',
                'file_disk' => 'local',
                'file_name' => 'export-3-documents',
                'exporter' => 'App\\Filament\\Exports\\DocumentExporter',
                'processed_rows' => 1,
                'total_rows' => 1,
                'successful_rows' => 1,
                'user_id' => 1,
                'created_at' => '2026-04-17 22:55:04',
                'updated_at' => '2026-04-17 22:55:04',
            ),
        ));
        
        
    }
}