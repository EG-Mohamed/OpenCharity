<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('charity_cases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')->constrained()->cascadeOnDelete();
            $table->foreignId('case_type_id')->constrained()->restrictOnDelete();
            $table->string('code')->unique();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('priority')->index();
            $table->string('status')->index();
            $table->string('visit_status')->index();
            $table->timestamp('registered_at')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamp('last_visit_at')->nullable();
            $table->timestamp('next_visit_at')->nullable();
            $table->decimal('requested_amount', 12, 2)->default(0);
            $table->decimal('approved_amount', 12, 2)->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('charity_cases');
    }
};
