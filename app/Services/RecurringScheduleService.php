<?php

namespace App\Services;

use App\Enums\FundingStatus;
use App\Enums\ScheduleFrequency;
use App\Enums\ScheduleStatus;
use App\Models\AssistanceSchedule;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class RecurringScheduleService
{
    public function generateOccurrences(AssistanceSchedule $parent): void
    {
        if (! $parent->isParent() || ! $parent->scheduled_date) {
            return;
        }

        $parent->loadMissing('children');

        $existingDates = $parent->children
            ->pluck('scheduled_date')
            ->filter()
            ->map(fn ($date): string => Carbon::parse($date)->toDateString())
            ->all();

        $date = $parent->frequency->nextDate($parent->scheduled_date->copy());
        $occurrenceNumber = ((int) $parent->children->max('occurrence_number')) + 1;
        $generated = 0;
        $limit = $parent->end_date ? PHP_INT_MAX : 12;

        while ($date && $generated < $limit && $this->shouldCreateOccurrence($parent, $date)) {
            if (! in_array($date->toDateString(), $existingDates, true)) {
                $parent->children()->create([
                    'charity_case_id' => $parent->charity_case_id,
                    'assistance_type_id' => $parent->assistance_type_id,
                    'parent_schedule_id' => $parent->getKey(),
                    'scheduled_date' => $date->toDateString(),
                    'scheduled_time' => $parent->scheduled_time,
                    'end_date' => null,
                    'occurrence_number' => $occurrenceNumber,
                    'amount' => $parent->amount,
                    'quantity' => $parent->quantity,
                    'frequency' => ScheduleFrequency::Once,
                    'status' => ScheduleStatus::Scheduled,
                    'funding_status' => FundingStatus::Unfunded,
                    'notes' => $parent->notes,
                ]);

                $existingDates[] = $date->toDateString();
                $occurrenceNumber++;
                $generated++;
            }

            $date = $parent->frequency->nextDate($date);
        }
    }

    public function cancelFutureOccurrences(AssistanceSchedule $parent): void
    {
        if (! $parent->isParent()) {
            return;
        }

        $parent->children()
            ->whereDate('scheduled_date', '>=', now()->toDateString())
            ->whereNotIn('status', [
                ScheduleStatus::Completed->value,
                ScheduleStatus::Canceled->value,
            ])
            ->update([
                'status' => ScheduleStatus::Canceled->value,
            ]);
    }

    public function regenerateOccurrences(AssistanceSchedule $parent): void
    {
        if (! $parent->isParent()) {
            return;
        }

        $futureChildren = $parent->children()
            ->whereDate('scheduled_date', '>=', now()->toDateString())
            ->where('status', '!=', ScheduleStatus::Completed->value)
            ->get();

        $futureChildren->each->delete();

        $parent->unsetRelation('children');

        $this->generateOccurrences($parent);
    }

    public function postponeFutureOccurrences(AssistanceSchedule $parent): void
    {
        if (! $parent->isParent() || ! $parent->scheduled_date) {
            return;
        }

        $children = $parent->children()
            ->whereDate('scheduled_date', '>=', now()->toDateString())
            ->whereIn('status', [
                ScheduleStatus::Scheduled->value,
                ScheduleStatus::Approved->value,
            ])
            ->orderBy('scheduled_date')
            ->get();

        $date = $parent->scheduled_date->copy();

        $children->each(function (AssistanceSchedule $child) use (&$date, $parent): void {
            $date = $parent->frequency->nextDate($date) ?? $date;

            if ($parent->end_date && $date->gt($parent->end_date)) {
                return;
            }

            $child->updateQuietly([
                'scheduled_date' => $date->toDateString(),
                'status' => ScheduleStatus::Postponed,
            ]);
        });
    }

    public function latestOccurrenceDate(AssistanceSchedule $parent): ?Carbon
    {
        $latestChildDate = $parent->children()
            ->max('scheduled_date');

        if ($latestChildDate) {
            return Carbon::parse($latestChildDate);
        }

        return $parent->scheduled_date?->copy();
    }

    public function parentsNeedingUpcomingGeneration(): Collection
    {
        return AssistanceSchedule::query()
            ->whereNull('parent_schedule_id')
            ->whereNotIn('frequency', [ScheduleFrequency::Once->value, ScheduleFrequency::Custom->value])
            ->where('status', '!=', ScheduleStatus::Canceled->value)
            ->with('children')
            ->get()
            ->filter(function (AssistanceSchedule $schedule): bool {
                $latestDate = $this->latestOccurrenceDate($schedule);

                if (! $latestDate) {
                    return false;
                }

                if ($schedule->end_date && $latestDate->gte($schedule->end_date)) {
                    return false;
                }

                return $latestDate->lte(now()->addDays(30));
            })
            ->values();
    }

    protected function shouldCreateOccurrence(AssistanceSchedule $parent, Carbon $date): bool
    {
        if ($parent->end_date && $date->gt($parent->end_date)) {
            return false;
        }

        return true;
    }
}
