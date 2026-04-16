<?php

namespace App\Filament\Resources\CharityCases\Pages;

use App\Enums\CasePriority;
use App\Enums\CaseStatus;
use App\Filament\Resources\CharityCases\CharityCaseResource;
use App\Filament\Resources\CharityCases\Widgets\CharityCaseStatsOverview;
use Filament\Actions\CreateAction;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListCharityCases extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = CharityCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            CharityCaseStatsOverview::class,
        ];
    }

    public function getHeaderWidgetsColumns(): int|array
    {
        return [
            'md' => 3,
            'xl' => 6,
        ];
    }

    public function getTabs(): array
    {
        $tabs = [
            'all' => Tab::make(__('All')),
        ];

        foreach (CaseStatus::cases() as $status) {
            $tabs[$status->value] = Tab::make($status->getLabel())
                ->modifyQueryUsing(fn (Builder $query): Builder => $query->where('status', $status));
        }

        $tabs['urgent'] = Tab::make(__('Urgent'))
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->where('priority', CasePriority::Urgent));

        return $tabs;
    }
}
