<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('relation_to_head')->index();
            $table->string('gender')->index();
            $table->date('birth_date')->nullable();
            $table->string('marital_status')->index();
            $table->string('education_status')->index();
            $table->string('employment_status')->index();
            $table->string('health_status')->index();
            $table->decimal('monthly_income', 12, 2)->default(0);
            $table->string('national_id')->nullable()->index();
            $table->string('phone')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('family_members');
    }
};
