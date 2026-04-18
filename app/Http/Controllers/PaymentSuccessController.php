<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Contracts\View\View;

class PaymentSuccessController extends Controller
{
    public function __invoke(Donation $donation): View
    {
        $donation->loadMissing(['donationTarget:id,title']);

        SEOTools::setTitle(__('Donation Successful'));
        SEOTools::setDescription(__('Thank you for your generous donation. Your contribution makes a difference.'));
        SEOMeta::setRobots('noindex,nofollow');

        return view('payments.success', [
            'donation' => $donation,
        ]);
    }
}
