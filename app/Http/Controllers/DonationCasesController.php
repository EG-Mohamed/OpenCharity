<?php

namespace App\Http\Controllers;

use App\Enums\DonationTargetStatus;
use App\Models\DonationTarget;
use Illuminate\Contracts\View\View;

class DonationCasesController extends Controller
{
    public function __invoke(): View
    {
        $targets = DonationTarget::query()
            ->with(['family:id,name', 'charityCase:id,title'])
            ->where('status', DonationTargetStatus::Active)
            ->latest('starts_at')
            ->paginate(9);

        return view('donation-cases', [
            'targets' => $targets,
        ]);
    }
}
