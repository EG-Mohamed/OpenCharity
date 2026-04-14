<?php

namespace App\Models;

use App\Enums\FundingStatus;
use App\Enums\ScheduleFrequency;
use App\Enums\ScheduleStatus;
use Database\Factories\AssistanceScheduleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssistanceSchedule extends Model
{
    /** @use HasFactory<AssistanceScheduleFactory> */
    use HasFactory;

    use SoftDeletes;

    protected function casts(): array
    {
        return [
            'scheduled_date' => 'date',
            'scheduled_time' => 'datetime:H:i',
            'amount' => 'decimal:2',
            'quantity' => 'decimal:2',
            'frequency' => ScheduleFrequency::class,
            'status' => ScheduleStatus::class,
            'funding_status' => FundingStatus::class,
        ];
    }

    public function charityCase(): BelongsTo
    {
        return $this->belongsTo(CharityCase::class);
    }

    public function assistanceType(): BelongsTo
    {
        return $this->belongsTo(AssistanceType::class);
    }

    public function assistanceDeliveries(): HasMany
    {
        return $this->hasMany(AssistanceDelivery::class);
    }

    public function donationAllocations(): HasMany
    {
        return $this->hasMany(DonationAllocation::class);
    }
}
