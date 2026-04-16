<?php

namespace App\Filament\Resources\AssistanceDeliveries\Widgets;

use App\Enums\DeliveryStatus;
use App\Filament\Resources\AssistanceDeliveries\Pages\ListAssistanceDeliveries;
use App\Filament\Widgets\ElegantState;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AssistanceDeliveryStatsOverview extends StatsOverviewWidget
{
    use InteractsWithPageTable;

    protected static bool $isLazy = false;

    protected function getTablePage(): string
    {
        return ListAssistanceDeliveries::class;
    }

    protected function getStats(): array
    {
        $query = $this->getPageTableQuery();

        return [
            ElegantState::make(__('Total Deliveries'), (string) (clone $query)->count()),
            ElegantState::make(__('Delivered'), (string) (clone $query)->where('delivery_status', DeliveryStatus::Delivered)->count()),
            ElegantState::make(__('Pending'), (string) (clone $query)->where('delivery_status', DeliveryStatus::Pending)->count()),
            ElegantState::make(__('This Month'), (string) (clone $query)->whereBetween('delivered_at', [now()->startOfMonth(), now()->endOfMonth()])->count()),
        ];
    }
}
