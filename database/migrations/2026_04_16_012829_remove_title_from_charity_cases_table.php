<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('charity_cases', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->foreignIdFor(\App\Models\FamilyMember::class)->constrained()->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('charity_cases', function (Blueprint $table) {
            $table->string('title');
             $table->dropForeignIdFor(\App\Models\FamilyMember::class);
        });
    }
};
