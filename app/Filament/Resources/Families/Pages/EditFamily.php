<?php

namespace App\Filament\Resources\Families\Pages;

use App\Filament\Resources\Families\FamilyResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditFamily extends EditRecord
{
    protected static string $resource = FamilyResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (blank($data['code'] ?? null)) {
            unset($data['code']);
        }

        $data['name'] = $data['primary_contact_name'] ?: $this->record->code;

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
