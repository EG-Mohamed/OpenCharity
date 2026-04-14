<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('charity_case_id')->nullable()->constrained()->nullOnDelete();
            $table->string('type')->index();
            $table->string('category')->index();
            $table->string('title');
            $table->string('file_path');
            $table->string('file_name');
            $table->string('mime_type')->nullable();
            $table->unsignedBigInteger('file_size')->default(0);
            $table->string('visibility')->index();
            $table->date('issued_at')->nullable();
            $table->date('expires_at')->nullable();
            $table->boolean('is_required')->default(false)->index();
            $table->boolean('is_verified')->default(false)->index();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
