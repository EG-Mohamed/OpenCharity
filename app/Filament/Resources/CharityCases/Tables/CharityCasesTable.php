<?php

namespace App\Filament\Resources\CharityCases\Tables;

use App\Enums\CasePriority;
use App\Enums\CaseStatus;
use App\Enums\VisitStatusCase;
use App\Filament\Resources\Families\RelationManagers\CharityCasesRelationManager;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

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
