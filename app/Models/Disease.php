<?php

namespace App\Models;

use Database\Factories\DiseaseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Disease extends Model
{
    /** @use HasFactory<DiseaseFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'is_chronic' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function familyMembers(): BelongsToMany
    {
        return $this->belongsToMany(FamilyMember::class);
    }
}
