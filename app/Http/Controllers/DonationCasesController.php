<?php

namespace App\Http\Controllers;

use App\Enums\DonationStatus;
use App\Enums\DonationTargetStatus;
use App\Enums\DonationTargetType;
use App\Models\DonationTarget;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DonationCasesController extends Controller
{
    public function __invoke(Request $request): View
    {
        $allActiveTargets = DonationTarget::query()
            ->with(['family:id,name', 'charityCase:id,code'])
            ->where('status', DonationTargetStatus::Active)
            ->latest('starts_at')
            ->get();

        $targets = DonationTarget::query()
            ->withSum(['donations as paid_donations_sum' => function ($query) {
                $query->where('status', DonationStatus::Paid);
            }], 'amount')
            ->with(['family:id,name', 'charityCase:id,code'])
            ->where('status', DonationTargetStatus::Active)
            ->latest('starts_at')
            ->paginate(12)
            ->withQueryString();

        $selectedTargetId = $request->integer('target') ?: null;
        $selectedTarget = $selectedTargetId ? $allActiveTargets->firstWhere('id', $selectedTargetId) : null;
        $selectedType = $request->string('type')->toString();
        $defaultType = $selectedTarget?->type?->value;

        if ($selectedTarget !== null && in_array($selectedType, array_column(DonationTargetType::cases(), 'value'), true)) {
            $defaultType = $selectedType;
        }

        return view('donation-cases', [
            'targets' => $targets,
            'allTargets' => $allActiveTargets,
            'selectedTarget' => $selectedTarget,
            'defaultTargetId' => $selectedTarget?->id,
            'defaultType' => $defaultType,
        ]);
    }
}
