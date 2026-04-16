<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('assistance_schedules', function (Blueprint $table) {
            $table->foreignId('parent_schedule_id')
                ->nullable()
                ->after('assistance_type_id')
                ->constrained('assistance_schedules')
                ->nullOnDelete();
            $table->date('end_date')->nullable()->after('scheduled_date');
            $table->unsignedInteger('occurrence_number')->nullable()->after('end_date');

            $table->index('parent_schedule_id');
        });
    }

    public function down(): void
    {
        Schema::table('assistance_schedules', function (Blueprint $table) {
            $table->dropIndex(['parent_schedule_id']);
            $table->dropConstrainedForeignId('parent_schedule_id');
            $table->dropColumn(['end_date', 'occurrence_number']);
        });
    }
};
