<?php

namespace App\Filament\Resources\AssistanceTypes\Pages;

use App\Filament\Resources\AssistanceTypes\AssistanceTypeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAssistanceTypes extends ListRecords
{
    protected static string $resource = AssistanceTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
