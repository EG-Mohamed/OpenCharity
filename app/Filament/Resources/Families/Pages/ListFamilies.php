<?php

namespace App\Filament\Resources\Families\Pages;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use App\Filament\Resources\Families\FamilyResource;
use App\Filament\Resources\Families\Widgets\FamilyStatsOverview;
use Filament\Actions\CreateAction;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListFamilies extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = FamilyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            FamilyStatsOverview::class,
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

        foreach (FamilyStatus::cases() as $status) {
            $tabs[$status->value] = Tab::make($status->getLabel())
                ->modifyQueryUsing(fn (Builder $query): Builder => $query->where('status', $status));
        }

        $tabs['housing_need'] = Tab::make(__('Housing Need'))
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->whereIn('housing_status', [
                HousingStatus::Rented,
                HousingStatus::Shared,
                HousingStatus::Temporary,
                HousingStatus::Homeless,
            ]));

        return $tabs;
    }
}
