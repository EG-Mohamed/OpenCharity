<?php

namespace App\Console\Commands;

use App\Services\RecurringScheduleService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('schedule:generate-upcoming')]
#[Description('Generate upcoming assistance schedule occurrences')]
class GenerateUpcomingSchedules extends Command
{
    public function __construct(protected RecurringScheduleService $recurringScheduleService)
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $parents = $this->recurringScheduleService->parentsNeedingUpcomingGeneration();

        foreach ($parents as $parent) {
            $this->recurringScheduleService->generateOccurrences($parent);
        }

        $this->info(__('Processed :count recurring schedule series.', ['count' => $parents->count()]));

        return self::SUCCESS;
    }
}
