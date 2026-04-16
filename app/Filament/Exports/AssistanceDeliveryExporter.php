<?php

namespace App\Filament\Exports;

use App\Models\AssistanceDelivery;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;

class AssistanceDeliveryExporter extends Exporter
{
    protected static ?string $model = AssistanceDelivery::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('assistanceSchedule.charityCase.code')->label(__('Case Code')),
            ExportColumn::make('assistanceSchedule.assistanceType.name')->label(__('Assistance Type')),
            ExportColumn::make('delivery_status')->label(__('Delivery Status')),
            ExportColumn::make('delivered_at')->label(__('Delivered At')),
            ExportColumn::make('received_by_name')->label(__('Received By Name')),
            ExportColumn::make('received_by_phone')->label(__('Received By Phone')),
            ExportColumn::make('proof_file_path')->label(__('Proof File')),
            ExportColumn::make('created_at')->label(__('Created At')),
        ];
    }

    public static function getCompletedNotificationBody($export): string
    {
        return __('Your assistance deliveries export has completed and :count rows were exported.', ['count' => $export->successful_rows]);
    }
}
