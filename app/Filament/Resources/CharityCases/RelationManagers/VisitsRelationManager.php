<?php

namespace App\Filament\Resources\CharityCases\RelationManagers;

use App\Filament\Resources\Visits\VisitResource;
use Filament\Resources\RelationManagers\RelationManager;

class VisitsRelationManager extends RelationManager
{
    protected static string $relationship = 'visits';

    protected static ?string $relatedResource = VisitResource::class;
}
