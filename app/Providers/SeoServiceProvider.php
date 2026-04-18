<?php

namespace App\Providers;

use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            return;
        }

        $siteName = setting('general.system_name') ?: config('app.name');
        $description = setting('general.description') ?: '';
        $favicon = setting('branding.favicon');
        $ogImage = setting('branding.og_image') ?: $favicon;
        $ogImageUrl = filled($ogImage) ? Storage::url($ogImage) : null;
        $siteUrl = config('app.url');

        SEOMeta::setTitleDefault($siteName);
        SEOMeta::setTitleSeparator(' | ');
        SEOMeta::setDescription($description);
        SEOMeta::setKeywords([]);
        SEOMeta::setRobots('index,follow');
        SEOMeta::setCanonical(url()->full());

        OpenGraph::setTitle($siteName);
        OpenGraph::setDescription($description);
        OpenGraph::setSiteName($siteName);
        OpenGraph::setType('website');
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('locale', 'ar_EG');
        OpenGraph::addProperty('locale:alternate', 'en_US');
        if ($ogImageUrl) {
            OpenGraph::addImage(url($ogImageUrl));
        }

        TwitterCard::setType('summary_large_image');
        TwitterCard::setTitle($siteName);
        TwitterCard::setDescription($description);
        if ($ogImageUrl) {
            TwitterCard::setImage(url($ogImageUrl));
        }

        JsonLdMulti::setType('Organization');
        JsonLdMulti::setTitle($siteName);
        JsonLdMulti::setDescription($description);
        JsonLdMulti::setUrl($siteUrl);
        if ($ogImageUrl) {
            JsonLdMulti::addImage(url($ogImageUrl));
        }

        $contactPhone = setting('contact.primary_phone');
        $contactEmail = setting('contact.email');
        if (filled($contactPhone) || filled($contactEmail)) {
            $contactPoint = ['@type' => 'ContactPoint', 'contactType' => 'customer support'];
            if (filled($contactPhone)) {
                $contactPoint['telephone'] = $contactPhone;
            }
            if (filled($contactEmail)) {
                $contactPoint['email'] = $contactEmail;
            }
            JsonLdMulti::addValue('contactPoint', $contactPoint);
        }
    }
}
