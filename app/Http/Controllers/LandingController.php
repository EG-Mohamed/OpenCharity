<?php

namespace App\Http\Controllers;

use App\Enums\CaseStatus;
use App\Enums\DonationTargetStatus;
use App\Models\AssistanceType;
use App\Models\CaseType;
use App\Models\CharityCase;
use App\Models\Donation;
use App\Models\DonationTarget;
use App\Models\Family;
use Illuminate\Contracts\View\View;

class LandingController extends Controller
{
    public function __invoke(): View
    {
        $targets = DonationTarget::query()
            ->with(['family:id,name', 'charityCase:id,title'])
            ->where('status', DonationTargetStatus::Active)
            ->latest('starts_at')
            ->limit(6)
            ->get();

        $caseTypes = CaseType::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get(['id', 'name', 'description']);

        $assistanceTypes = AssistanceType::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get(['id', 'name', 'description', 'unit_type']);

        $stats = [
            [
                'label' => __('الأسر المدعومة'),
                'value' => Family::query()->count(),
                'suffix' => '+',
            ],
            [
                'label' => __('الحالات المكتملة'),
                'value' => CharityCase::query()->where('status', CaseStatus::Completed)->count(),
                'suffix' => '+',
            ],
            [
                'label' => __('إجمالي التبرعات'),
                'value' => (int) round((float) Donation::query()->sum('amount')),
                'suffix' => ' '. currency()->getSuffix(),
            ],
            [
                'label' => __('المتطوعون'),
                'value' => 120,
                'suffix' => '+',
            ],
        ];

        return view('landing', [
            'targets' => $targets,
            'caseTypes' => $caseTypes,
            'assistanceTypes' => $assistanceTypes,
            'stats' => $stats,
        ]);
    }
}
