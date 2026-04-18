<?php

namespace App\Models;

use Database\Factories\NationalityFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Nationality extends Model
{
    /** @use HasFactory<NationalityFactory> */
    use HasFactory,HasTranslations;

    public $translatable = ['name'];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function familyMembers(): HasMany
    {
        return $this->hasMany(FamilyMember::class);
    }
}
