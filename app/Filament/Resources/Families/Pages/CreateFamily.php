<?php

namespace App\Filament\Resources\Families\Pages;

use App\Filament\Resources\Families\FamilyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFamily extends CreateRecord
{
    protected static string $resource = FamilyResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        unset($data['code']);
        $data['name'] = $data['primary_contact_name'] ?: $data['code'];

        return $data;
    }
}
