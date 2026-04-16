<?php

namespace App\Filament\Resources\Visits\Widgets;

use App\Enums\VisitStatus;
use App\Filament\Resources\Visits\Pages\ListVisits;
use App\Filament\Widgets\ElegantState;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VisitStatsOverview extends StatsOverviewWidget
{
    use InteractsWithPageTable;

    protected static bool $isLazy = false;
    protected int | array | null $columns = 5;
    protected function getTablePage(): string
    {
        return ListVisits::class;
    }

    protected function getStats(): array
    {
        $query = $this->getPageTableQuery();

        return [
            ElegantState::make(__('Total Visits'), (string) (clone $query)->count()),
            ElegantState::make(__('Scheduled'), (string) (clone $query)->where('status', VisitStatus::Scheduled)->count()),
            ElegantState::make(__('Completed'), (string) (clone $query)->where('status', VisitStatus::Completed)->count()),
            ElegantState::make(__('Missed / Postponed'), (string) (clone $query)->whereIn('status', [VisitStatus::Missed, VisitStatus::Postponed])->count()),
            ElegantState::make(__('Upcoming'), (string) (clone $query)->whereNotNull('next_visit_at')->where('next_visit_at', '>=', now())->count()),
        ];
    }
}
