<?php

namespace App\Http\Controllers;

use App\Enums\DonationStatus;
use App\Enums\DonationTargetStatus;
use App\Models\DonationTarget;
use Illuminate\Contracts\View\View;

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

        return view('donation-target', compact('donationTarget'));
    }
}
