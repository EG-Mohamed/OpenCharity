<?php

namespace App\Filament\Resources\AssistanceSchedules\RelationManagers;

use App\Filament\Resources\AssistanceDeliveries\AssistanceDeliveryResource;
use Filament\Resources\RelationManagers\RelationManager;

class AssistanceDeliveriesRelationManager extends RelationManager
{
    protected static string $relationship = 'assistanceDeliveries';

    protected static ?string $relatedResource = AssistanceDeliveryResource::class;
}
