<?php

namespace App\Filament\Resources\CharityCases\Pages;

use App\Filament\Resources\CharityCases\CharityCaseResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditCharityCase extends EditRecord
{
    protected static string $resource = CharityCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
