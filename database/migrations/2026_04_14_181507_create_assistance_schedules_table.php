<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assistance_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('charity_case_id')->constrained()->cascadeOnDelete();
            $table->foreignId('assistance_type_id')->constrained()->restrictOnDelete();
            $table->date('scheduled_date')->nullable();
            $table->time('scheduled_time')->nullable();
            $table->decimal('amount', 12, 2)->nullable();
            $table->decimal('quantity', 12, 2)->nullable();
            $table->string('frequency')->index();
            $table->string('status')->index();
            $table->string('funding_status')->index();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assistance_schedules');
    }
};
