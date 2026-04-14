<?php

namespace App\Models;

use App\Enums\DonationTargetStatus;
use App\Enums\DonationTargetType;
use Database\Factories\DonationTargetFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationTarget extends Model
{
    /** @use HasFactory<DonationTargetFactory> */
    use HasFactory;

    use SoftDeletes;

    protected function casts(): array
    {
        return [
            'type' => DonationTargetType::class,
            'goal_amount' => 'decimal:2',
            'collected_amount' => 'decimal:2',
            'status' => DonationTargetStatus::class,
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
        ];
    }

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }

    public function charityCase(): BelongsTo
    {
        return $this->belongsTo(CharityCase::class);
    }

    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class);
    }

    public function donationAllocations(): HasMany
    {
        return $this->hasMany(DonationAllocation::class);
    }
}
