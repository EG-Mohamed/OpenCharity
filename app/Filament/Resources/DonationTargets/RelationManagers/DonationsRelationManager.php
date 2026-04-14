<?php

namespace App\Filament\Resources\DonationTargets\RelationManagers;

use App\Filament\Resources\Donations\DonationResource;
use Filament\Resources\RelationManagers\RelationManager;

class DonationsRelationManager extends RelationManager
{
    protected static string $relationship = 'donations';

    protected static ?string $relatedResource = DonationResource::class;
}
