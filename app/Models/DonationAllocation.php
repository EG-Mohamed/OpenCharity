<?php

namespace App\Models;

use App\Enums\AllocationStatus;
use Database\Factories\DonationAllocationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationAllocation extends Model
{
    /** @use HasFactory<DonationAllocationFactory> */
    use HasFactory;

    use SoftDeletes;

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'allocation_status' => AllocationStatus::class,
            'allocated_at' => 'datetime',
        ];
    }

    public function donation(): BelongsTo
    {
        return $this->belongsTo(Donation::class);
    }

    public function donationTarget(): BelongsTo
    {
        return $this->belongsTo(DonationTarget::class);
    }

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }

    public function charityCase(): BelongsTo
    {
        return $this->belongsTo(CharityCase::class);
    }

    public function assistanceSchedule(): BelongsTo
    {
        return $this->belongsTo(AssistanceSchedule::class);
    }
}
