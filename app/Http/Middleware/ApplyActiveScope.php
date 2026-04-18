<?php

namespace App\Http\Middleware;

use App\Models\AssistanceType;
use App\Models\CaseType;
use App\Models\Disease;
use App\Models\Nationality;
use App\Models\Scopes\ActiveScope;
use App\Models\State;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplyActiveScope
{
    public function handle(Request $request, Closure $next): Response
    {
        AssistanceType::addGlobalScope(new ActiveScope);
        CaseType::addGlobalScope(new ActiveScope);
        Disease::addGlobalScope(new ActiveScope);
        Nationality::addGlobalScope(new ActiveScope);
        State::addGlobalScope(new ActiveScope('status'));

        return $next($request);
    }
}
