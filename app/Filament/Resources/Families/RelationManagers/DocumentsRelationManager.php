<?php

namespace App\Filament\Resources\Families\RelationManagers;

use App\Filament\Resources\Documents\DocumentResource;
use Filament\Resources\RelationManagers\RelationManager;

class DocumentsRelationManager extends RelationManager
{
    protected static string $relationship = 'documents';

    protected static ?string $relatedResource = DocumentResource::class;
}
