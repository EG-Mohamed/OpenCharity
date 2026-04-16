<?php

namespace App\Filament\Resources\AssistanceDeliveries\Tables;

use App\Enums\DeliveryStatus;
use App\Filament\Exports\AssistanceDeliveryExporter;
use App\Models\AssistanceType;
use App\Models\CharityCase;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter as DaterangepickerFilter;

class AssistanceDeliveriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('assistanceSchedule.charityCase.title')
                    ->label(__('Assistance Schedule'))
                    ->searchable(),
                TextColumn::make('assistanceSchedule.charityCase.code')
                    ->label(__('Case Code'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('assistanceSchedule.assistanceType.name')
                    ->label(__('Assistance Type'))
                    ->searchable(),
                TextColumn::make('delivered_at')
                    ->label(__('Delivered At'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('delivery_status')
                    ->label(__('Delivery Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('received_by_name')
                    ->label(__('Received By Name'))
                    ->searchable(),
                TextColumn::make('received_by_phone')
                    ->label(__('Received By Phone'))
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label(__('Created At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('Updated At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->label(__('Deleted At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('charity_case_id')
                    ->label(__('Charity Case'))
                    ->options(fn (): array => CharityCase::query()->pluck('code', 'id')->all())
                    ->searchable()
                    ->query(function (Builder $query, array $data): Builder {
                        $value = $data['value'] ?? null;

                        if (blank($value)) {
                            return $query;
                        }

                        return $query->whereHas('assistanceSchedule', fn (Builder $query): Builder => $query->where('charity_case_id', $value));
                    }),
                SelectFilter::make('assistance_type_id')
                    ->label(__('Assistance Type'))
                    ->options(fn (): array => AssistanceType::query()->pluck('name', 'id')->all())
                    ->searchable()
                    ->query(function (Builder $query, array $data): Builder {
                        $value = $data['value'] ?? null;

                        if (blank($value)) {
                            return $query;
                        }

                        return $query->whereHas('assistanceSchedule', fn (Builder $query): Builder => $query->where('assistance_type_id', $value));
                    }),
                SelectFilter::make('delivery_status')
                    ->label(__('Delivery Status'))
                    ->options(DeliveryStatus::class)
                    ->searchable(),
                DaterangepickerFilter::make('delivered_at')
                    ->label(__('Delivered At'))
                    ->useColumn('delivered_at'),
                TernaryFilter::make('proof_file_path')
                    ->label(__('Has Proof File'))
                    ->nullable(),
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->headerActions([
                ExportAction::make()
                    ->label(__('Export'))
                    ->exporter(AssistanceDeliveryExporter::class),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
