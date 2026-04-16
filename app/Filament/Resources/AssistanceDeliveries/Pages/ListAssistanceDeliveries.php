<?php

namespace App\Filament\Resources\AssistanceDeliveries\Pages;

use App\Enums\DeliveryStatus;
use App\Filament\Resources\AssistanceDeliveries\AssistanceDeliveryResource;
use App\Filament\Resources\AssistanceDeliveries\Widgets\AssistanceDeliveryStatsOverview;
use Filament\Actions\CreateAction;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListAssistanceDeliveries extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = AssistanceDeliveryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            AssistanceDeliveryStatsOverview::class,
        ];
    }

    public function getHeaderWidgetsColumns(): int|array
    {
        return [
            'md' => 2,
            'xl' => 4,
        ];
    }

    public function getTabs(): array
    {
        $tabs = [
            'all' => Tab::make(__('All')),
        ];

        foreach (DeliveryStatus::cases() as $status) {
            $tabs[$status->value] = Tab::make($status->getLabel())
                ->modifyQueryUsing(fn (Builder $query): Builder => $query->where('delivery_status', $status));
        }

        return $tabs;
    }
}
