<?php

namespace App\Filament\Exports;

use App\Models\AssistanceSchedule;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;

class AssistanceScheduleExporter extends Exporter
{
    protected static ?string $model = AssistanceSchedule::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('charityCase.code')->label(__('Case Code')),
            ExportColumn::make('charityCase.family.code')->label(__('Family Code')),
            ExportColumn::make('assistanceType.name')->label(__('Assistance Type')),
            ExportColumn::make('scheduled_date')->label(__('Scheduled Date')),
            ExportColumn::make('scheduled_time')->label(__('Scheduled Time')),
            ExportColumn::make('amount')->label(__('Amount')),
            ExportColumn::make('quantity')->label(__('Quantity')),
            ExportColumn::make('frequency')->label(__('Frequency')),
            ExportColumn::make('status')->label(__('Status')),
            ExportColumn::make('funding_status')->label(__('Funding Status')),
            ExportColumn::make('created_at')->label(__('Created At')),
        ];
    }

    public static function getCompletedNotificationBody($export): string
    {
        return __('Your assistance schedules export has completed and :count rows were exported.', ['count' => $export->successful_rows]);
    }
}
