<?php

namespace App\Filament\Resources\FamilyMembers\Pages;

use App\Enums\EmploymentStatus;
use App\Filament\Resources\FamilyMembers\FamilyMemberResource;
use App\Filament\Resources\FamilyMembers\Widgets\FamilyMemberStatsOverview;
use Filament\Actions\CreateAction;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListFamilyMembers extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = FamilyMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            FamilyMemberStatsOverview::class,
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

        foreach (EmploymentStatus::cases() as $status) {
            $tabs[$status->value] = Tab::make($status->getLabel())
                ->modifyQueryUsing(fn (Builder $query): Builder => $query->where('employment_status', $status));
        }

        return $tabs;
    }
}
