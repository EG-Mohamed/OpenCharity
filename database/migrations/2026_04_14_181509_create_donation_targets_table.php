<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donation_targets', function (Blueprint $table) {
            $table->id();
            $table->string('type')->index();
            $table->foreignId('family_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('charity_case_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('goal_amount', 12, 2)->default(0);
            $table->decimal('collected_amount', 12, 2)->default(0);
            $table->string('status')->index();
            $table->timestamp('starts_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donation_targets');
    }
};
