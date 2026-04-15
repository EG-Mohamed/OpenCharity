<?php

namespace App\Observers;

use App\Models\Visit;

class VisitObserver
{
    public function saved(Visit $visit): void
    {
        $visit->charityCase?->syncVisitDates();
    }

    public function deleted(Visit $visit): void
    {
        $visit->charityCase?->syncVisitDates();
    }
}
