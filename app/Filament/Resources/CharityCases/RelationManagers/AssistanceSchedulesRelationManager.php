<?php

namespace App\Filament\Resources\CharityCases\RelationManagers;

use App\Filament\Resources\AssistanceSchedules\AssistanceScheduleResource;
use Filament\Resources\RelationManagers\RelationManager;

class AssistanceSchedulesRelationManager extends RelationManager
{
    protected static string $relationship = 'assistanceSchedules';

    protected static ?string $relatedResource = AssistanceScheduleResource::class;
}
