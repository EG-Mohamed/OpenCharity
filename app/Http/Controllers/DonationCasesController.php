<?php

namespace App\Http\Controllers;

use App\Enums\DonationStatus;
use App\Enums\DonationTargetStatus;
use App\Models\DonationTarget;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DonationCasesController extends Controller
{
    public function __invoke(Request $request): View
    {
        SEOTools::setTitle(__('Donation Cases'));
        SEOTools::setDescription(__('Browse active charity donation cases and support families in need with your contribution.'));
        OpenGraph::setType('website');

        $targets = DonationTarget::query()
            ->withSum(['donations as paid_donations_sum' => function ($query) {
                $query->where('status', DonationStatus::Paid);
            }], 'amount')
            ->with(['family:id,name,code', 'charityCase:id,code'])
            ->where('status', DonationTargetStatus::Active)
            ->latest('starts_at')
            ->paginate(12)
            ->withQueryString();

        return view('donation-cases', compact('targets'));
    }
}
