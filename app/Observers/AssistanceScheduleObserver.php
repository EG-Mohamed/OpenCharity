<?php

namespace App\Observers;

use App\Enums\ScheduleFrequency;
use App\Enums\ScheduleStatus;
use App\Models\AssistanceSchedule;
use App\Services\RecurringScheduleService;

class AssistanceScheduleObserver
{
    public function __construct(protected RecurringScheduleService $recurringScheduleService) {}

    public function creating(AssistanceSchedule $assistanceSchedule): void
    {
        if (
            $assistanceSchedule->parent_schedule_id === null
            && $assistanceSchedule->frequency !== ScheduleFrequency::Once
            && $assistanceSchedule->frequency !== ScheduleFrequency::Custom
            && $assistanceSchedule->scheduled_date
            && ! $assistanceSchedule->end_date
        ) {
            $date = $assistanceSchedule->scheduled_date->copy();

            for ($index = 0; $index < 12; $index++) {
                $nextDate = $assistanceSchedule->frequency->nextDate($date);

                if (! $nextDate) {
                    break;
                }

                $date = $nextDate;
            }

            $assistanceSchedule->end_date = $date;
        }
    }

    public function created(AssistanceSchedule $assistanceSchedule): void
    {
        if ($assistanceSchedule->isParent()) {
            $this->recurringScheduleService->generateOccurrences($assistanceSchedule);
        }
    }

    public function updating(AssistanceSchedule $assistanceSchedule): void
    {
        if (! $assistanceSchedule->isParent()) {
            return;
        }

        if ($assistanceSchedule->isDirty('status')) {
            if ($assistanceSchedule->status === ScheduleStatus::Canceled) {
                $this->recurringScheduleService->cancelFutureOccurrences($assistanceSchedule);
            }

            if ($assistanceSchedule->status === ScheduleStatus::Postponed) {
                $this->recurringScheduleService->postponeFutureOccurrences($assistanceSchedule);
            }
        }

        if ($assistanceSchedule->isDirty(['scheduled_date', 'scheduled_time', 'amount', 'quantity', 'end_date'])) {
            $this->recurringScheduleService->regenerateOccurrences($assistanceSchedule);
        }
    }

    public function deleting(AssistanceSchedule $assistanceSchedule): void
    {
        if ($assistanceSchedule->isParent()) {
            $assistanceSchedule->children()->get()->each->delete();
        }
    }
}
