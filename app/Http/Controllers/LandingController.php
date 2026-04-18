<?php

namespace App\Http\Controllers;

use App\Enums\CaseStatus;
use App\Enums\DonationStatus;
use App\Enums\DonationTargetStatus;
use App\Models\AssistanceType;
use App\Models\CaseType;
use App\Models\CharityCase;
use App\Models\Donation;
use App\Models\DonationTarget;
use App\Models\Family;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Contracts\View\View;

class LandingController extends Controller
{
    public function __invoke(): View
    {
        $siteName = setting('general.system_name') ?: config('app.name');
        $description = setting('general.description') ?: '';

        SEOTools::setTitle($siteName, false);
        SEOTools::setDescription($description);
        OpenGraph::setType('website');

        JsonLdMulti::newJsonLd();
        JsonLdMulti::setType('WebSite');
        JsonLdMulti::setTitle($siteName);
        JsonLdMulti::setUrl(url('/'));
        JsonLdMulti::addValue('potentialAction', [
            '@type' => 'SearchAction',
            'target' => url('/donation-cases').'?q={search_term_string}',
            'query-input' => 'required name=search_term_string',
        ]);

        $targets = DonationTarget::query()
            ->withSum(['donations as paid_donations_sum' => function ($query) {
                $query->where('status', DonationStatus::Paid);
            }], 'amount')
            ->with(['family:id,name,code', 'charityCase:id,code'])
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
                'label' => __('Supported families'),
                'value' => Family::query()->count(),
                'suffix' => '+',
            ],
            [
                'label' => __('Completed cases'),
                'value' => CharityCase::query()->where('status', CaseStatus::Completed)->count(),
                'suffix' => '+',
            ],
            [
                'label' => __('Total donations'),
                'value' => (int) round((float) Donation::query()->where('status', DonationStatus::Paid)->sum('amount')),
                'suffix' => ' '.currency()->getSuffix(),
            ],
            [
                'label' => __('Active donation opportunities'),
                'value' => DonationTarget::query()->where('status', DonationTargetStatus::Active)->count(),
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
