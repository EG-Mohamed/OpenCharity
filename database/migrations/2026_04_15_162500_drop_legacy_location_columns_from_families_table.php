<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('families', function (Blueprint $table): void {
            $table->dropColumn(['governorate', 'city', 'district']);
        });
    }

    public function down(): void
    {
        Schema::table('families', function (Blueprint $table): void {
            $table->string('governorate')->nullable()->index();
            $table->string('city')->nullable()->index();
            $table->string('district')->nullable();
        });
    }
};
