<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Family::class)->after('id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\FamilyMember::class)->after('family_id')->constrained()->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->dropConstrainedForeignIdFor(\App\Models\Family::class);
            $table->dropConstrainedForeignIdFor(\App\Models\FamilyMember::class);
        });
    }
};
