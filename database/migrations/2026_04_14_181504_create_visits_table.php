<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('charity_case_id')->constrained()->cascadeOnDelete();
            $table->string('visit_type')->index();
            $table->string('status')->index();
            $table->dateTime('scheduled_at')->nullable();
            $table->dateTime('visited_at')->nullable();
            $table->text('summary')->nullable();
            $table->text('findings')->nullable();
            $table->text('recommendations')->nullable();
            $table->dateTime('next_visit_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
