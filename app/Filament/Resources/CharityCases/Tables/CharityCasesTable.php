<?php

namespace App\Filament\Resources\CharityCases\Tables;

use App\Enums\CasePriority;
use App\Enums\CaseStatus;
use App\Enums\VisitStatusCase;
use App\Filament\Exports\CharityCaseExporter;
use App\Filament\Resources\Families\RelationManagers\CharityCasesRelationManager;
use App\Models\CaseType;
use App\Models\Family;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter as DaterangepickerFilter;
use Tapp\FilamentValueRangeFilter\Filters\ValueRangeFilter;

class CharityCasesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->badge()->copyable()
                    ->label(__('Code'))
                    ->searchable(),
                TextColumn::make('family.name')
                    ->hiddenOn(CharityCasesRelationManager::class)
                    ->label(__('Family'))
                    ->searchable(),
                TextColumn::make('familyMember.name')
                    ->badge()
                    ->label(__('Family Member'))
                    ->searchable(),
                TextColumn::make('caseType.name')
                    ->badge()
                    ->label(__('Case Type'))
                    ->searchable(),
                TextColumn::make('priority')
                    ->label(__('Priority'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label(__('Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('visit_status')
                    ->label(__('Visit Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('registered_at')
                    ->label(__('Registered At'))
                    ->dateTime()->placeholder('-')
                    ->sortable(),
                TextColumn::make('reviewed_at')
                    ->label(__('Reviewed At'))
                    ->dateTime()->placeholder('-')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('approved_at')
                    ->label(__('Approved At'))
                    ->dateTime()->placeholder('-')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('closed_at')
                    ->label(__('Closed At'))
                    ->dateTime()->placeholder('-')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('last_visit_at')
                    ->label(__('Last Visit At'))
                    ->dateTime()->placeholder('-')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('next_visit_at')
                    ->label(__('Next Visit At'))
                    ->dateTime()->placeholder('-')
                    ->sortable(),
                TextColumn::make('requested_amount')
                    ->label(__('Requested Amount'))
                    ->currency()
                    ->sortable(),
                TextColumn::make('approved_amount')
                    ->label(__('Approved Amount'))
                    ->currency()
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
                SelectFilter::make('family_id')
                    ->label(__('Family'))
                    ->options(fn (): array => Family::query()->pluck('code', 'id')->all())
                    ->searchable(),
                SelectFilter::make('case_type_id')
                    ->label(__('Case Type'))
                    ->options(fn (): array => CaseType::query()->pluck('name', 'id')->all())
                    ->searchable(),
                SelectFilter::make('priority')
                    ->label(__('Priority'))
                    ->options(CasePriority::class)
                    ->searchable(),
                SelectFilter::make('status')
                    ->label(__('Status'))
                    ->options(CaseStatus::class)
                    ->searchable(),
                SelectFilter::make('visit_status')
                    ->label(__('Visit Status'))
                    ->options(VisitStatusCase::class)
                    ->searchable(),
                DaterangepickerFilter::make('registered_at')
                    ->label(__('Registered At'))
                    ->useColumn('registered_at'),
                DaterangepickerFilter::make('approved_at')
                    ->label(__('Approved At'))
                    ->useColumn('approved_at'),
                DaterangepickerFilter::make('next_visit_at')
                    ->label(__('Next Visit At'))
                    ->useColumn('next_visit_at'),
                ValueRangeFilter::make('requested_amount')
                    ->label(__('Requested Amount')),
                ValueRangeFilter::make('approved_amount')
                    ->label(__('Approved Amount')),
                TernaryFilter::make('has_visits')
                    ->label(__('Has Visits'))
                    ->queries(
                        true: fn (Builder $query): Builder => $query->has('visits'),
                        false: fn (Builder $query): Builder => $query->doesntHave('visits'),
                        blank: fn (Builder $query): Builder => $query,
                    ),
                TernaryFilter::make('has_schedules')
                    ->label(__('Has Assistance Schedules'))
                    ->queries(
                        true: fn (Builder $query): Builder => $query->has('assistanceSchedules'),
                        false: fn (Builder $query): Builder => $query->doesntHave('assistanceSchedules'),
                        blank: fn (Builder $query): Builder => $query,
                    ),
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->headerActions([
                ExportAction::make()
                    ->label(__('Export'))
                    ->exporter(CharityCaseExporter::class),
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
