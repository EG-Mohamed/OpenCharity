<?php

namespace App\Filament\Resources\DonationTargets\Pages;

use App\Filament\Resources\DonationTargets\DonationTargetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDonationTargets extends ListRecords
{
    protected static string $resource = DonationTargetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
