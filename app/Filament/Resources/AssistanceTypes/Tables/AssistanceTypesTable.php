<?php

namespace App\Filament\Resources\AssistanceTypes\Tables;

use App\Enums\AssistanceUnitType;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class AssistanceTypesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('Name'))
                    ->searchable(),
                TextColumn::make('code')
                    ->label(__('Code'))
                    ->searchable(),
                TextColumn::make('unit_type')
                    ->label(__('Unit Type'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_recurring_allowed')
                    ->label(__('Is Recurring Allowed'))
                    ->boolean(),
                IconColumn::make('is_active')
                    ->label(__('Is Active'))
                    ->boolean(),
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
            ])
            ->filters([
                SelectFilter::make('unit_type')
                    ->label(__('Unit Type'))
                    ->options(AssistanceUnitType::class)
                    ->searchable(),
                TernaryFilter::make('is_active')
                    ->label(__('Is Active')),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
