<?php

namespace App\Models;

use App\Enums\AssistanceUnitType;
use Database\Factories\AssistanceTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AssistanceType extends Model
{
    /** @use HasFactory<AssistanceTypeFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'unit_type' => AssistanceUnitType::class,
            'is_recurring_allowed' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function assistanceSchedules(): HasMany
    {
        return $this->hasMany(AssistanceSchedule::class);
    }
}
