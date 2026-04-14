<?php

namespace App\Filament\Resources\DonationTargets\Pages;

use App\Filament\Resources\DonationTargets\DonationTargetResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditDonationTarget extends EditRecord
{
    protected static string $resource = DonationTargetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
