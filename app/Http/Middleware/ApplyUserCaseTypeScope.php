<?php

namespace App\Http\Middleware;

use App\Models\AssistanceDelivery;
use App\Models\AssistanceSchedule;
use App\Models\CharityCase;
use App\Models\Document;
use App\Models\DonationTarget;
use App\Models\Family;
use App\Models\FamilyMember;
use App\Models\Scopes\UserCaseTypeScope;
use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplyUserCaseTypeScope
{
    public function handle(Request $request, Closure $next): Response
    {
        CharityCase::addGlobalScope(new UserCaseTypeScope('self'));
        Family::addGlobalScope(new UserCaseTypeScope('charityCases'));
        FamilyMember::addGlobalScope(new UserCaseTypeScope('family'));
        Visit::addGlobalScope(new UserCaseTypeScope('charityCase'));
        Document::addGlobalScope(new UserCaseTypeScope('charityCase'));
        AssistanceSchedule::addGlobalScope(new UserCaseTypeScope('charityCase'));
        DonationTarget::addGlobalScope(new UserCaseTypeScope('charityCase'));
        AssistanceDelivery::addGlobalScope(new UserCaseTypeScope('assistanceSchedule'));

        return $next($request);
    }
}
