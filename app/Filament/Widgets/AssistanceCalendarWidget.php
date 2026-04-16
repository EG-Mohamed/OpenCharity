<?php

namespace App\Filament\Widgets;

use App\Enums\ScheduleStatus;
use App\Filament\Resources\AssistanceSchedules\AssistanceScheduleResource;
use App\Filament\Resources\AssistanceSchedules\Schemas\AssistanceScheduleForm;
use App\Models\AssistanceSchedule;
use Filament\Actions\CreateAction;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class AssistanceCalendarWidget extends FullCalendarWidget
{
    public Model|string|null $model = AssistanceSchedule::class;

    protected static bool $isLazy = false;

    public function config(): array
    {
        return [
            'initialView' => 'dayGridMonth',
            'headerToolbar' => [
                'left' => 'prev,next today',
                'center' => 'title',
                'right' => 'dayGridMonth,timeGridWeek,listMonth',
            ],
        ];
    }

    public function fetchEvents(array $info): array
    {
        return AssistanceSchedule::query()
            ->with(['assistanceType:id,name', 'charityCase:id,code'])
            ->whereBetween('scheduled_date', [$info['start'], $info['end']])
            ->whereIn('status', [ScheduleStatus::Approved, ScheduleStatus::Scheduled, ScheduleStatus::Postponed])
            ->get()
            ->map(function (AssistanceSchedule $schedule): array {
                $title = collect([
                    $schedule->assistanceType?->name,
                    $schedule->charityCase?->code,
                ])->filter()->join(' - ');

                return EventData::make()
                    ->id($schedule->getKey())
                    ->title($title ?: __('Assistance Schedule'))
                    ->start($schedule->scheduled_time
                        ? $schedule->scheduled_date->copy()->setTimeFromTimeString($schedule->scheduled_time->format('H:i:s'))
                        : $schedule->scheduled_date->toDateString())
                    ->allDay($schedule->scheduled_time === null)
                    ->backgroundColor($this->getStatusColor($schedule->status))
                    ->borderColor($this->getStatusColor($schedule->status))
                    ->textColor('white')
                    ->url(AssistanceScheduleResource::getUrl('edit', ['record' => $schedule]))
                    ->extendedProps([
                        'status' => $schedule->status?->getLabel(),
                    ])
                    ->toArray();
            })
            ->all();
    }

    public function getFormSchema(): array
    {
        return AssistanceScheduleForm::configure(app(Schema::class))->getComponents();
    }

    protected function headerActions(): array
    {
        return [
            CreateAction::make()
                ->modelLabel(__('Assistance Schedule'))
                ->model($this->getModel())
                ->schema($this->getFormSchema())
                ->fillForm(function (array $arguments): array {
                    $start = data_get($arguments, 'start');

                    if (! $start) {
                        return [];
                    }

                    return [
                        'scheduled_date' => Carbon::parse($start)->toDateString(),
                    ];
                })
                ->after(function (): void {
                    $this->refreshRecords();
                }),
        ];
    }

    protected function getEloquentQuery(): Builder
    {
        return AssistanceScheduleResource::getEloquentQuery();
    }

    protected function getStatusColor(?ScheduleStatus $status): string
    {
        return match ($status) {
            ScheduleStatus::Completed, ScheduleStatus::Approved => '#16a34a',
            ScheduleStatus::Canceled, ScheduleStatus::Failed => '#dc2626',
            ScheduleStatus::Draft => '#6b7280',
            default => '#2563eb',
        };
    }
}
