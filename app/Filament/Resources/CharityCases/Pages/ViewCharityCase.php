<?php

namespace App\Filament\Resources\CharityCases\Pages;

use App\Filament\Resources\CharityCases\CharityCaseResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCharityCase extends ViewRecord
{
    protected static string $resource = CharityCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
