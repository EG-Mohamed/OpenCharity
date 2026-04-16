<?php

namespace App\Filament\Exports;

use App\Models\Family;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;

class FamilyExporter extends Exporter
{
    protected static ?string $model = Family::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('code')->label(__('Code')),
            ExportColumn::make('primary_contact_name')->label(__('Primary Contact Name')),
            ExportColumn::make('primary_contact_phone')->label(__('Primary Contact Phone')),
            ExportColumn::make('secondary_contact_phone')->label(__('Secondary Contact Phone')),
            ExportColumn::make('state.name')->label(__('State')),
            ExportColumn::make('city.name')->label(__('City')),
            ExportColumn::make('neighborhood.name')->label(__('Neighborhood')),
            ExportColumn::make('housing_status')->label(__('Housing Status')),
            ExportColumn::make('status')->label(__('Status')),
            ExportColumn::make('created_at')->label(__('Created At')),
        ];
    }

    public static function getCompletedNotificationBody($export): string
    {
        return __('Your families export has completed and :count rows were exported.', ['count' => $export->successful_rows]);
    }
}
