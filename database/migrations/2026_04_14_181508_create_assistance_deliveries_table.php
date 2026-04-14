<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assistance_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assistance_schedule_id')->constrained()->cascadeOnDelete();
            $table->timestamp('delivered_at')->nullable();
            $table->string('delivery_status')->index();
            $table->string('received_by_name')->nullable();
            $table->string('received_by_phone')->nullable();
            $table->string('proof_file_path')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assistance_deliveries');
    }
};
