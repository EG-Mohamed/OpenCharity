<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class State extends Model
{
    use HasTranslations, HasUuids;

    public $translatable = ['name'];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'state_id');
    }

    public function neighborhoods(): HasMany
    {
        return $this->hasMany(Neighborhood::class, 'state_id');
    }

    protected function casts(): array
    {
        return [
            'name' => 'array',
            'status' => 'boolean',
        ];
    }
}
