<?php

namespace App\Filament\Resources\AssistanceTypes\Pages;

use App\Filament\Resources\AssistanceTypes\AssistanceTypeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAssistanceType extends EditRecord
{
    protected static string $resource = AssistanceTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
