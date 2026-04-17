<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('family_members')
            ->whereIn('health_status', ['chronic_illness', 'disabled', 'critical', 'other'])
            ->update(['health_status' => 'unhealthy']);
    }

    public function down(): void {}
};
