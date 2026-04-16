<?php

namespace App\Filament\Exports;

use App\Models\FamilyMember;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;

class FamilyMemberExporter extends Exporter
{
    protected static ?string $model = FamilyMember::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('family.code')->label(__('Family Code')),
            ExportColumn::make('name')->label(__('Name')),
            ExportColumn::make('relation_to_head')->label(__('Relation To Head')),
            ExportColumn::make('gender')->label(__('Gender')),
            ExportColumn::make('birth_date')->label(__('Birth Date')),
            ExportColumn::make('marital_status')->label(__('Marital Status')),
            ExportColumn::make('education_status')->label(__('Education Status')),
            ExportColumn::make('employment_status')->label(__('Employment Status')),
            ExportColumn::make('health_status')->label(__('Health Status')),
            ExportColumn::make('monthly_income')->label(__('Monthly Income')),
        ];
    }

    public static function getCompletedNotificationBody($export): string
    {
        return __('Your family members export has completed and :count rows were exported.', ['count' => $export->successful_rows]);
    }
}
