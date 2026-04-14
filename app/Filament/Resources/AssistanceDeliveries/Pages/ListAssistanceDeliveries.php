<?php

namespace App\Filament\Resources\AssistanceDeliveries\Pages;

use App\Filament\Resources\AssistanceDeliveries\AssistanceDeliveryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAssistanceDeliveries extends ListRecords
{
    protected static string $resource = AssistanceDeliveryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
