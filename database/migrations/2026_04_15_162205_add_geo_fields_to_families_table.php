<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('families', function (Blueprint $table): void {
            $table->foreignUuid('state_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignUuid('city_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignUuid('neighborhood_id')->nullable()->constrained()->nullOnDelete();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
        });

        DB::table('families')
            ->select(['id', 'governorate', 'city', 'district'])
            ->orderBy('id')
            ->chunkById(100, function ($families): void {
                foreach ($families as $family) {
                    $stateId = DB::table('states')
                        ->where('name->en', $family->governorate)
                        ->orWhere('name->ar', $family->governorate)
                        ->value('id');

                    $cityId = DB::table('cities')
                        ->when($stateId, fn ($query) => $query->where('state_id', $stateId))
                        ->where(function ($query) use ($family): void {
                            $query
                                ->where('name->en', $family->city)
                                ->orWhere('name->ar', $family->city);
                        })
                        ->value('id');

                    $neighborhoodId = DB::table('neighborhoods')
                        ->when($stateId, fn ($query) => $query->where('state_id', $stateId))
                        ->when($cityId, fn ($query) => $query->where('city_id', $cityId))
                        ->where(function ($query) use ($family): void {
                            $query
                                ->where('name->en', $family->district)
                                ->orWhere('name->ar', $family->district);
                        })
                        ->value('id');

                    DB::table('families')
                        ->where('id', $family->id)
                        ->update([
                            'state_id' => $stateId,
                            'city_id' => $cityId,
                            'neighborhood_id' => $neighborhoodId,
                        ]);
                }
            });
    }

    public function down(): void
    {
        Schema::table('families', function (Blueprint $table): void {
            $table->dropConstrainedForeignId('state_id');
            $table->dropConstrainedForeignId('city_id');
            $table->dropConstrainedForeignId('neighborhood_id');
            $table->dropColumn(['latitude', 'longitude']);
        });
    }
};
