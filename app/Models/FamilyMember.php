<?php

namespace App\Models;

use App\Enums\EducationStatus;
use App\Enums\EmploymentStatus;
use App\Enums\Gender;
use App\Enums\HealthStatus;
use App\Enums\MaritalStatus;
use App\Enums\RelationToHead;
use Database\Factories\FamilyMemberFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamilyMember extends Model
{
    /** @use HasFactory<FamilyMemberFactory> */
    use HasFactory;

    use SoftDeletes;

    protected function casts(): array
    {
        return [
            'relation_to_head' => RelationToHead::class,
            'gender' => Gender::class,
            'birth_date' => 'date',
            'marital_status' => MaritalStatus::class,
            'education_status' => EducationStatus::class,
            'employment_status' => EmploymentStatus::class,
            'health_status' => HealthStatus::class,
            'monthly_income' => 'decimal:2',
            'is_refugee' => 'boolean',
        ];
    }

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }

    public function diseases(): BelongsToMany
    {
        return $this->belongsToMany(Disease::class);
    }

    public function nationality(): BelongsTo
    {
        return $this->belongsTo(Nationality::class);
    }

    public function charityCases(): HasMany
    {
        return $this->hasMany(CharityCase::class);
    }

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }
}
