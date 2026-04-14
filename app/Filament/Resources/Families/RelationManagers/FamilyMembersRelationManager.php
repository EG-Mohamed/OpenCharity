<?php

namespace App\Filament\Resources\Families\RelationManagers;

use App\Filament\Resources\FamilyMembers\FamilyMemberResource;
use Filament\Resources\RelationManagers\RelationManager;

class FamilyMembersRelationManager extends RelationManager
{
    protected static string $relationship = 'familyMembers';

    protected static ?string $relatedResource = FamilyMemberResource::class;
}
