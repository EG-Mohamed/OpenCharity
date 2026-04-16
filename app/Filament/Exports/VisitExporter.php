<?php

namespace App\Filament\Exports;

use App\Models\Visit;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;

class VisitExporter extends Exporter
{
    protected static ?string $model = Visit::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('charityCase.code')->label(__('Case Code')),
            ExportColumn::make('charityCase.family.code')->label(__('Family Code')),
            ExportColumn::make('visit_type')->label(__('Visit Type')),
            ExportColumn::make('status')->label(__('Status')),
            ExportColumn::make('scheduled_at')->label(__('Scheduled At')),
            ExportColumn::make('visited_at')->label(__('Visited At')),
            ExportColumn::make('next_visit_at')->label(__('Next Visit At')),
            ExportColumn::make('summary')->label(__('Summary')),
        ];
    }

    public static function getCompletedNotificationBody($export): string
    {
        return __('Your visits export has completed and :count rows were exported.', ['count' => $export->successful_rows]);
    }
}
