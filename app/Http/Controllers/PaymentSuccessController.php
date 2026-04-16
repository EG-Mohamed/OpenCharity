<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Contracts\View\View;

class PaymentSuccessController extends Controller
{
    public function __invoke(Donation $donation): View
    {
        $donation->loadMissing(['donationTarget:id,title']);

        return view('payments.success', [
            'donation' => $donation,
        ]);
    }
}
