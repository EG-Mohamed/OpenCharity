<?php

namespace App\Filament\Resources\DonationTargets\RelationManagers;

use App\Filament\Resources\DonationAllocations\DonationAllocationResource;
use Filament\Resources\RelationManagers\RelationManager;

class DonationAllocationsRelationManager extends RelationManager
{
    protected static string $relationship = 'donationAllocations';

    protected static ?string $relatedResource = DonationAllocationResource::class;
}
