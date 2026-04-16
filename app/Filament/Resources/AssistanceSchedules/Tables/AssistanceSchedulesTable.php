<?php

namespace App\Filament\Resources\AssistanceSchedules\Tables;

use App\Enums\FundingStatus;
use App\Enums\ScheduleFrequency;
use App\Enums\ScheduleStatus;
use App\Models\AssistanceSchedule;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AssistanceSchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('is_parent')
                    ->label(__('Series'))
                    ->boolean()
                    ->state(fn (AssistanceSchedule $record): bool => $record->isParent()),
                TextColumn::make('series_label')
                    ->label(__('Occurrence'))
                    ->badge()
                    ->state(function (AssistanceSchedule $record): string {
                        if ($record->isParent()) {
                            return __('Series');
                        }

                        if ($record->isChild() && $record->occurrence_number) {
                            return __('Occurrence #:number', ['number' => $record->occurrence_number]);
                        }

                        return __('Single');
                    }),
                TextColumn::make('charityCase.full_identifier')
                    ->badge()
                    ->limit(50)
                    ->label(__('Charity Case'))
                    ->searchable(),
                TextColumn::make('charityCase.code')
                    ->label(__('Case Code'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('assistanceType.name')
                    ->label(__('Assistance Type'))
                    ->searchable(),
                TextColumn::make('scheduled_date')
                    ->label(__('Scheduled Date'))
                    ->date()
                    ->sortable(),
                TextColumn::make('scheduled_time')
                    ->label(__('Scheduled Time'))
                    ->time()
                    ->sortable(),
                TextColumn::make('amount')
                    ->label(__('Amount'))
                    ->currency()
                    ->sortable(),
                TextColumn::make('quantity')
                    ->label(__('Quantity'))
                    ->numeric()
                    ->sortable(),
                TextColumn::make('frequency')
                    ->label(__('Frequency'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label(__('Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('funding_status')
                    ->label(__('Funding Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
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
                SelectFilter::make('frequency')
                    ->label(__('Frequency'))
                    ->options(ScheduleFrequency::class)
                    ->searchable(),
                SelectFilter::make('status')
                    ->label(__('Status'))
                    ->options(ScheduleStatus::class)
                    ->searchable(),
                SelectFilter::make('funding_status')
                    ->label(__('Funding Status'))
                    ->options(FundingStatus::class)
                    ->searchable(),
                Filter::make('parents_only')
                    ->label(__('Parents only'))
                    ->query(fn (Builder $query): Builder => $query->whereNull('parent_schedule_id')),
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
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
