<?php

namespace App\Filament\Resources\AssistanceSchedules\Widgets;

use App\Enums\FundingStatus;
use App\Enums\ScheduleStatus;
use App\Filament\Resources\AssistanceSchedules\Pages\ListAssistanceSchedules;
use App\Filament\Widgets\ElegantState;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AssistanceScheduleStatsOverview extends StatsOverviewWidget
{
    use InteractsWithPageTable;

    protected static bool $isLazy = false;

    protected function getTablePage(): string
    {
        return ListAssistanceSchedules::class;
    }

    protected function getStats(): array
    {
        $query = $this->getPageTableQuery();

        return [
            ElegantState::make(__('Total Schedules'), (string) (clone $query)->count()),
            ElegantState::make(__('Today & Upcoming'), (string) (clone $query)->whereDate('scheduled_date', '>=', now()->toDateString())->count()),
            ElegantState::make(__('Completed'), (string) (clone $query)->where('status', ScheduleStatus::Completed)->count()),
            ElegantState::make(__('Funded'), (string) (clone $query)->where('funding_status', FundingStatus::Funded)->count()),
        ];
    }
}
