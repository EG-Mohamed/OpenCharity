<?php

namespace App\Http\Controllers;

use App\Enums\DonationStatus;
use App\Enums\DonationTargetStatus;
use App\Models\DonationTarget;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class DonationTargetController extends Controller
{
    public function __invoke(DonationTarget $donationTarget): View
    {
        abort_if($donationTarget->status !== DonationTargetStatus::Active, 404);

        $donationTarget->loadMissing([
            'family:id,name,code,housing_status,address',
            'family.state:id,name',
            'family.city:id,name',
            'charityCase:id,code,description,priority,status,registered_at,approved_amount,notes',
        ]);

        $donationTarget->paid_donations_sum = $donationTarget->donations()
            ->where('status', DonationStatus::Paid)
            ->sum('amount');

        $description = Str::limit(strip_tags($donationTarget->description ?? ''), 160);
        $canonicalUrl = route('donation-target', $donationTarget);

        SEOTools::setTitle($donationTarget->title);
        SEOTools::setDescription($description);
        SEOMeta::setCanonical($canonicalUrl);
        SEOMeta::setRobots('index,follow');
        SEOMeta::addKeyword([
            __('charity'),
            __('donation'),
            __('support families'),
            $donationTarget->title,
        ]);

        OpenGraph::setTitle($donationTarget->title);
        OpenGraph::setDescription($description);
        OpenGraph::setType('article');
        OpenGraph::setUrl($canonicalUrl);
        OpenGraph::addProperty('article:published_time', $donationTarget->created_at?->toIso8601String());
        OpenGraph::addProperty('article:modified_time', $donationTarget->updated_at?->toIso8601String());

        TwitterCard::setTitle($donationTarget->title);
        TwitterCard::setDescription($description);

        JsonLdMulti::newJsonLd();
        JsonLdMulti::setType('Project');
        JsonLdMulti::setTitle($donationTarget->title);
        JsonLdMulti::setDescription($description);
        JsonLdMulti::setUrl($canonicalUrl);
        JsonLdMulti::addValue('funding', [
            '@type' => 'Grant',
            'fundedItem' => ['@type' => 'Project', 'name' => $donationTarget->title],
            'funder' => ['@type' => 'Organization', 'name' => setting('general.system_name') ?: config('app.name')],
        ]);
        JsonLdMulti::addValue('potentialAction', [
            '@type' => 'DonateAction',
            'target' => $canonicalUrl,
        ]);

        return view('donation-target', compact('donationTarget'));
    }
}
