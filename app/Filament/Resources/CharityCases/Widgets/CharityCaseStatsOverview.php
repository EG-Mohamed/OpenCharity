<?php

namespace App\Filament\Resources\CharityCases\Widgets;

use App\Enums\CasePriority;
use App\Enums\CaseStatus;
use App\Filament\Resources\CharityCases\Pages\ListCharityCases;
use App\Filament\Widgets\ElegantState;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CharityCaseStatsOverview extends StatsOverviewWidget
{
    use InteractsWithPageTable;

    protected static bool $isLazy = false;

    protected function getTablePage(): string
    {
        return ListCharityCases::class;
    }

    protected function getStats(): array
    {
        $query = $this->getPageTableQuery();

        return [
            ElegantState::make(__('Total Cases'), (string) (clone $query)->count()),
            ElegantState::make(__('Urgent'), (string) (clone $query)->where('priority', CasePriority::Urgent)->count()),
            ElegantState::make(__('Pending Review'), (string) (clone $query)->where('status', CaseStatus::PendingReview)->count()),
            ElegantState::make(__('Approved'), (string) (clone $query)->where('status', CaseStatus::Approved)->count()),
            ElegantState::make(__('In Progress'), (string) (clone $query)->where('status', CaseStatus::InProgress)->count()),
            ElegantState::make(__('Closed / Completed'), (string) (clone $query)->whereIn('status', [CaseStatus::Closed, CaseStatus::Completed])->count()),
        ];
    }
}
