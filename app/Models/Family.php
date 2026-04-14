<?php

namespace App\Models;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use Database\Factories\FamilyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Family extends Model
{
    /** @use HasFactory<FamilyFactory> */
    use HasFactory;

    use SoftDeletes;

    protected function casts(): array
    {
        return [
            'housing_status' => HousingStatus::class,
            'status' => FamilyStatus::class,
            'monthly_income' => 'decimal:2',
            'members_count' => 'integer',
        ];
    }

    public function familyMembers(): HasMany
    {
        return $this->hasMany(FamilyMember::class);
    }

    public function charityCases(): HasMany
    {
        return $this->hasMany(CharityCase::class);
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
}
