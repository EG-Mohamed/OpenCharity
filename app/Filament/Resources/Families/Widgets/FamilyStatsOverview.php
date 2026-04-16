<?php

namespace App\Filament\Resources\Families\Widgets;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use App\Filament\Resources\Families\Pages\ListFamilies;
use App\Filament\Widgets\ElegantState;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FamilyStatsOverview extends StatsOverviewWidget
{
    use InteractsWithPageTable;

    protected static bool $isLazy = false;

    protected function getTablePage(): string
    {
        return ListFamilies::class;
    }

    protected function getStats(): array
    {
        $query = $this->getPageTableQuery();

        return [
            ElegantState::make(__('Total Families'), (string) (clone $query)->count()),
            ElegantState::make(__('Active'), (string) (clone $query)->where('status', FamilyStatus::Active)->count()),
            ElegantState::make(__('Inactive / Archived'), (string) (clone $query)->whereIn('status', [FamilyStatus::Inactive, FamilyStatus::Archived])->count()),
            ElegantState::make(__('Total Members'), (string) (clone $query)->withCount('familyMembers')->get()->sum('family_members_count')),
        ];
    }
}
