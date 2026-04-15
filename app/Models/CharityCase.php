<?php

namespace App\Models;

use App\Enums\CasePriority;
use App\Enums\CaseStatus;
use App\Enums\VisitStatusCase;
use Database\Factories\CharityCaseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use MohamedSaid\Referenceable\Traits\HasReference;

class CharityCase extends Model
{
    /** @use HasFactory<CharityCaseFactory> */
    use HasFactory;

    use HasReference;
    use SoftDeletes;

    protected string $referenceColumn = 'code';

    protected string $referencePrefix = 'CASE';

    protected int $referenceLength = 6;

    protected function casts(): array
    {
        return [
            'priority' => CasePriority::class,
            'status' => CaseStatus::class,
            'visit_status' => VisitStatusCase::class,
            'registered_at' => 'datetime',
            'reviewed_at' => 'datetime',
            'approved_at' => 'datetime',
            'closed_at' => 'datetime',
            'last_visit_at' => 'datetime',
            'next_visit_at' => 'datetime',
            'requested_amount' => 'decimal:2',
            'approved_amount' => 'decimal:2',
        ];
    }

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }

    public function caseType(): BelongsTo
    {
        return $this->belongsTo(CaseType::class);
    }

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function assistanceSchedules(): HasMany
    {
        return $this->hasMany(AssistanceSchedule::class);
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
