<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('donation_targets', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }

    public function down(): void
    {
        Schema::table('donation_targets', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title');
        });
    }
};
