<?php

namespace App\Filament\Resources\AssistanceSchedules\Pages;

use App\Enums\ScheduleStatus;
use App\Filament\Resources\AssistanceSchedules\AssistanceScheduleResource;
use App\Filament\Resources\AssistanceSchedules\Widgets\AssistanceScheduleStatsOverview;
use Filament\Actions\CreateAction;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListAssistanceSchedules extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = AssistanceScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            AssistanceScheduleStatsOverview::class,
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

        foreach (ScheduleStatus::cases() as $status) {
            $tabs[$status->value] = Tab::make($status->getLabel())
                ->modifyQueryUsing(fn (Builder $query): Builder => $query->where('status', $status));
        }

        return $tabs;
    }
}
