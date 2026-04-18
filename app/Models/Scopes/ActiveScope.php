<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class ActiveScope implements Scope
{
    public function __construct(private string $column = 'is_active') {}

    public function apply(Builder $builder, Model $model): void
    {
        if (Auth::check() && Auth::user()->hasRole(config('filament-shield.super_admin.name', 'super_admin'))) {
            return;
        }

        if ($builder->getQuery()->wheres) {
            return;
        }

        $builder->where($this->column, true);
    }
}
