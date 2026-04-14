<?php

namespace App\Filament\Resources\AssistanceDeliveries\Pages;

use App\Filament\Resources\AssistanceDeliveries\AssistanceDeliveryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditAssistanceDelivery extends EditRecord
{
    protected static string $resource = AssistanceDeliveryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
