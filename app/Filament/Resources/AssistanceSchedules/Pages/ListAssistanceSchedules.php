<?php

namespace App\Filament\Resources\AssistanceSchedules\Pages;

use App\Filament\Resources\AssistanceSchedules\AssistanceScheduleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAssistanceSchedules extends ListRecords
{
    protected static string $resource = AssistanceScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
