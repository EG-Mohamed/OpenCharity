<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class City extends Model
{
    use HasUuids, HasTranslations;

    public $translatable = ['name'];

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function neighborhoods(): HasMany
    {
        return $this->hasMany(Neighborhood::class, 'city_id');
    }
}
