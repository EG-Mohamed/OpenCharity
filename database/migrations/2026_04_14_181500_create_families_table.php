<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('primary_contact_name');
            $table->string('primary_contact_phone');
            $table->string('secondary_contact_phone')->nullable();
            $table->string('national_id')->nullable()->index();
            $table->string('governorate')->index();
            $table->string('city')->index();
            $table->string('district')->nullable();
            $table->text('address')->nullable();
            $table->string('housing_status')->index();
            $table->decimal('monthly_income', 12, 2)->default(0);
            $table->unsignedInteger('members_count')->default(1);
            $table->text('notes')->nullable();
            $table->string('status')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
