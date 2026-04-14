<?php

namespace App\Filament\Resources\Families\RelationManagers;

use App\Filament\Resources\CharityCases\CharityCaseResource;
use Filament\Resources\RelationManagers\RelationManager;

class CharityCasesRelationManager extends RelationManager
{
    protected static string $relationship = 'charityCases';

    protected static ?string $relatedResource = CharityCaseResource::class;
}
