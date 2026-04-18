<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class UserCaseTypeScope implements Scope
{
    public function __construct(private string $relation = 'charityCase') {}

    public function apply(Builder $builder, Model $model): void
    {
        if (! Auth::check()) {
            return;
        }

        $user = Auth::user();

        if ($user->hasRole(config('filament-shield.super_admin.name', 'super_admin'))) {
            return;
        }

        $caseTypeIds = $user->caseTypes()->pluck('case_types.id')->all();

        if (empty($caseTypeIds)) {
            return;
        }
        match ($this->relation) {
            'self' => $builder->whereIn($model->getTable().'.case_type_id', $caseTypeIds),
            'charityCase' => $builder->whereHas('charityCase', fn (Builder $q) => $q->whereIn('case_type_id', $caseTypeIds)),
            'charityCases' => $builder->whereHas('charityCases', fn (Builder $q) => $q->whereIn('case_type_id', $caseTypeIds)),
            'family' => $builder->whereHas('family.charityCases', fn (Builder $q) => $q->whereIn('case_type_id', $caseTypeIds)),
            'assistanceSchedule' => $builder->whereHas('assistanceSchedule.charityCase', fn (Builder $q) => $q->whereIn('case_type_id', $caseTypeIds)),
        };
    }
}
