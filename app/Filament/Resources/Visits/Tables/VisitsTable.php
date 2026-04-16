<?php

namespace App\Filament\Resources\Visits\Tables;

use App\Enums\VisitStatus;
use App\Enums\VisitType;
use App\Filament\Exports\VisitExporter;
use App\Models\CharityCase;
use App\Models\Family;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter as DaterangepickerFilter;

class VisitsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('charityCase.code')
                    ->label(__('Charity Case'))
                    ->searchable(),
                TextColumn::make('charityCase.family.code')
                    ->label(__('Family'))
                    ->searchable(),
                TextColumn::make('visit_type')
                    ->label(__('Visit Type'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label(__('Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('scheduled_at')
                    ->label(__('Scheduled At'))
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->date()->placeholder('-')
                    ->sortable(),
                TextColumn::make('visited_at')
                    ->label(__('Visited At'))
                    ->date()->placeholder('-')
                    ->sortable(),
                TextColumn::make('next_visit_at')
                    ->label(__('Next Visit At'))
                    ->date()->placeholder('-')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label(__('Created At'))
                    ->dateTime()->placeholder('-')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('Updated At'))
                    ->dateTime()->placeholder('-')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->label(__('Deleted At'))
                    ->dateTime()->placeholder('-')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('charity_case_id')
                    ->label(__('Charity Case'))
                    ->options(fn (): array => CharityCase::query()->pluck('code', 'id')->all())
                    ->searchable(),
                SelectFilter::make('family_id')
                    ->label(__('Family'))
                    ->options(fn (): array => Family::query()->pluck('code', 'id')->all())
                    ->searchable()
                    ->query(function (Builder $query, array $data): Builder {
                        $value = $data['value'] ?? null;

                        if (blank($value)) {
                            return $query;
                        }

                        return $query->whereHas('charityCase', fn (Builder $query): Builder => $query->where('family_id', $value));
                    }),
                SelectFilter::make('visit_type')
                    ->label(__('Visit Type'))
                    ->options(VisitType::class)
                    ->searchable(),
                SelectFilter::make('status')
                    ->label(__('Status'))
                    ->options(VisitStatus::class)
                    ->searchable(),
                DaterangepickerFilter::make('scheduled_at')
                    ->label(__('Scheduled At'))
                    ->useColumn('scheduled_at'),
                DaterangepickerFilter::make('visited_at')
                    ->label(__('Visited At'))
                    ->useColumn('visited_at'),
                DaterangepickerFilter::make('next_visit_at')
                    ->label(__('Next Visit At'))
                    ->useColumn('next_visit_at'),
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->headerActions([
                ExportAction::make()
                    ->label(__('Export'))
                    ->exporter(VisitExporter::class),
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
