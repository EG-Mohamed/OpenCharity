<?php

namespace App\Filament\Resources\CharityCases\RelationManagers;

use App\Filament\Resources\DonationTargets\DonationTargetResource;
use Filament\Resources\RelationManagers\RelationManager;

class DonationTargetsRelationManager extends RelationManager
{
    protected static string $relationship = 'donationTargets';

    protected static ?string $relatedResource = DonationTargetResource::class;
}
