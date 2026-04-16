<?php

namespace App\Filament\Resources\FamilyMembers\Widgets;

use App\Enums\EmploymentStatus;
use App\Enums\Gender;
use App\Enums\HealthStatus;
use App\Filament\Resources\FamilyMembers\Pages\ListFamilyMembers;
use App\Filament\Widgets\ElegantState;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FamilyMemberStatsOverview extends StatsOverviewWidget
{
    use InteractsWithPageTable;

    protected static bool $isLazy = false;

    protected function getTablePage(): string
    {
        return ListFamilyMembers::class;
    }

    protected function getStats(): array
    {
        $query = $this->getPageTableQuery();

        return [
            ElegantState::make(__('Total Members'), (string) (clone $query)->count()),
            ElegantState::make(__('Male'), (string) (clone $query)->where('gender', Gender::Male)->count()),
            ElegantState::make(__('Female'), (string) (clone $query)->where('gender', Gender::Female)->count()),
        ];
    }
}
