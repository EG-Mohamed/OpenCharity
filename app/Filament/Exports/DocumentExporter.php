<?php

namespace App\Filament\Exports;

use App\Models\Document;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Illuminate\Support\Facades\Storage;

class DocumentExporter extends Exporter
{
    protected static ?string $model = Document::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('family.name')->label(__('Family')),
            ExportColumn::make('family.code')->label(__('Family Code')),
            ExportColumn::make('charityCase.title')->label(__('Charity Case')),
            ExportColumn::make('type')->label(__('Type')),
            ExportColumn::make('category')->label(__('Category')),
            ExportColumn::make('title')->label(__('Title')),
            ExportColumn::make('file_path')->label(__('File Path'))->formatStateUsing(fn($record) => rescue(fn() => Storage::url($record->file_path))),
            ExportColumn::make('visibility')->label(__('Visibility')),
            ExportColumn::make('issued_at')->label(__('Issued At')),
            ExportColumn::make('expires_at')->label(__('Expires At')),
            ExportColumn::make('is_required')->label(__('Is Required')),
            ExportColumn::make('is_verified')->label(__('Is Verified')),
            ExportColumn::make('notes')->label(__('Notes')),
            ExportColumn::make('created_at')->label(__('Created At')),
        ];
    }

    public static function getCompletedNotificationBody($export): string
    {
        return __('Your documents export has completed and :count rows were exported.', ['count' => $export->successful_rows]);
    }
}
