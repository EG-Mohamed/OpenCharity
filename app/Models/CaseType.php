<?php

namespace App\Models;

use Database\Factories\CaseTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MohamedSaid\Referenceable\Traits\HasReference;

class CaseType extends Model
{
    /** @use HasFactory<CaseTypeFactory> */
    use HasFactory;

    use HasReference;

    protected string $referenceColumn = 'code';

    protected string $referencePrefix = 'CT';

    protected int $referenceLength = 5;

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function charityCases(): HasMany
    {
        return $this->hasMany(CharityCase::class);
    }
}
