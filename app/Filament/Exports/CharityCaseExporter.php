<?php

namespace App\Filament\Exports;

use App\Models\CharityCase;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;

class CharityCaseExporter extends Exporter
{
    protected static ?string $model = CharityCase::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('code')->label(__('Code')),
            ExportColumn::make('family.code')->label(__('Family Code')),
            ExportColumn::make('familyMember.name')->label(__('Family Member')),
            ExportColumn::make('caseType.name')->label(__('Case Type')),
            ExportColumn::make('title')->label(__('Title')),
            ExportColumn::make('priority')->label(__('Priority')),
            ExportColumn::make('status')->label(__('Status')),
            ExportColumn::make('visit_status')->label(__('Visit Status')),
            ExportColumn::make('registered_at')->label(__('Registered At')),
            ExportColumn::make('approved_at')->label(__('Approved At')),
            ExportColumn::make('requested_amount')->label(__('Requested Amount')),
            ExportColumn::make('approved_amount')->label(__('Approved Amount')),
        ];
    }

    public static function getCompletedNotificationBody($export): string
    {
        return __('Your charity cases export has completed and :count rows were exported.', ['count' => $export->successful_rows]);
    }
}
