<?php

namespace App\Filament\Resources\CharityCases\Pages;

use App\Filament\Resources\CharityCases\CharityCaseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCharityCases extends ListRecords
{
    protected static string $resource = CharityCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
