<?php

namespace App\Filament\Resources\DonationAllocations\Pages;

use App\Filament\Resources\DonationAllocations\DonationAllocationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDonationAllocations extends ListRecords
{
    protected static string $resource = DonationAllocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
