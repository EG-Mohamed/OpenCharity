<?php

namespace App\Filament\Resources\Families\Tables;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class FamiliesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn ($query) => $query->withCount('familyMembers'))
            ->columns([
                TextColumn::make('code')
                    ->label(__('Code'))
                    ->searchable(),
                TextColumn::make('name')
                    ->label(__('Name'))
                    ->searchable(),
                TextColumn::make('primary_contact_name')
                    ->label(__('Primary Contact Name'))
                    ->searchable(),
                TextColumn::make('primary_contact_phone')
                    ->label(__('Primary Contact Phone'))
                    ->searchable(),
                TextColumn::make('secondary_contact_phone')
                    ->label(__('Secondary Contact Phone'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('governorate')
                    ->label(__('Governorate'))
                    ->searchable(),
                TextColumn::make('city')
                    ->label(__('City'))
                    ->searchable(),
                TextColumn::make('district')
                    ->label(__('District'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('housing_status')
                    ->label(__('Housing Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('monthly_income')
                    ->label(__('Monthly Income'))
                    ->currency()
                    ->sortable(),
                TextColumn::make('familyMembers_count')
                    ->label(__('Members Count'))
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status')
                    ->label(__('Status'))
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
                SelectFilter::make('status')
                    ->label(__('Status'))
                    ->options(FamilyStatus::class)
                    ->searchable(),
                SelectFilter::make('housing_status')
                    ->label(__('Housing Status'))
                    ->options(HousingStatus::class)
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
