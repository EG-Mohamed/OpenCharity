<?php

namespace App\Models;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use Database\Factories\FamilyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use MohamedSaid\Referenceable\Traits\HasReference;

class Family extends Model
{
    /** @use HasFactory<FamilyFactory> */
    use HasFactory;

    use HasReference;
    use SoftDeletes;

    protected string $referenceColumn = 'code';

    protected string $referencePrefix = 'FAM';

    protected int $referenceLength = 6;

    protected function casts(): array
    {
        return [
            'housing_status' => HousingStatus::class,
            'status' => FamilyStatus::class,
            'monthly_income' => 'decimal:2',
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
        ];
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function neighborhood(): BelongsTo
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function familyMembers(): HasMany
    {
        return $this->hasMany(FamilyMember::class);
    }

    public function charityCases(): HasMany
    {
        return $this->hasMany(CharityCase::class);
    }

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function donationTargets(): HasMany
    {
        return $this->hasMany(DonationTarget::class);
    }

    public function donationAllocations(): HasMany
    {
        return $this->hasMany(DonationAllocation::class);
    }

    public function assistanceSchedules(): HasManyThrough
    {
        return $this->hasManyThrough(AssistanceSchedule::class, CharityCase::class);
    }
}
