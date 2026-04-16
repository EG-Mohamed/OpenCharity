<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->uuid('uuid')->nullable()->unique()->after('id');
        });

        DB::table('donations')->whereNull('uuid')->orderBy('id')->chunkById(100, function ($donations): void {
            foreach ($donations as $donation) {
                DB::table('donations')
                    ->where('id', $donation->id)
                    ->update(['uuid' => (string) Str::uuid()]);
            }
        });

        DB::statement('ALTER TABLE donations MODIFY uuid CHAR(36) NOT NULL');
    }

    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropUnique(['uuid']);
            $table->dropColumn('uuid');
        });
    }
};
