<?php

namespace App\Http\Middleware;

use App\Models\AssistanceType;
use App\Models\CaseType;
use App\Models\Disease;
use App\Models\Nationality;
use App\Models\Scopes\ActiveScope;
use App\Models\State;
use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ApplyActiveScope
{
    public function handle(Request $request, Closure $next): Response
    {
        AssistanceType::addGlobalScope(new ActiveScope);
        Disease::addGlobalScope(new ActiveScope);
        Nationality::addGlobalScope(new ActiveScope);
        State::addGlobalScope(new ActiveScope('status'));

        CaseType::addGlobalScope('active_and_assigned', function (Builder $builder): void {
            $user = Auth::user();

            if (! $user || $user->hasRole(config('filament-shield.super_admin.name', 'super_admin'))) {
                return;
            }

            if ($builder->getQuery()->wheres) {
                return;
            }

            $assignedIds = $user->caseTypes()->pluck('case_types.id')->all();

            $builder->where('is_active', true);

            if (! empty($assignedIds)) {
                $builder->whereIn('id', $assignedIds);
            }
        });

        return $next($request);
    }
}
