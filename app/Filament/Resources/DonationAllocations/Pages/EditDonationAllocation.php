<?php

namespace App\Filament\Resources\DonationAllocations\Pages;

use App\Filament\Resources\DonationAllocations\DonationAllocationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditDonationAllocation extends EditRecord
{
    protected static string $resource = DonationAllocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
