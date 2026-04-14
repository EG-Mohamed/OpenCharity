<?php

namespace App\Filament\Resources\FamilyMembers\Tables;

use App\Enums\EmploymentStatus;
use App\Enums\Gender;
use App\Enums\HealthStatus;
use App\Enums\RelationToHead;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class FamilyMembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('family.name')
                    ->label(__('Family'))
                    ->searchable(),
                TextColumn::make('name')
                    ->label(__('Name'))
                    ->searchable(),
                TextColumn::make('relation_to_head')
                    ->label(__('Relation To Head'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('gender')
                    ->label(__('Gender'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('birth_date')
                    ->label(__('Birth Date'))
                    ->date()
                    ->sortable(),
                TextColumn::make('marital_status')
                    ->label(__('Marital Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('education_status')
                    ->label(__('Education Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('employment_status')
                    ->label(__('Employment Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('health_status')
                    ->label(__('Health Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('monthly_income')
                    ->label(__('Monthly Income'))
                    ->currency()
                    ->sortable(),
                TextColumn::make('national_id')
                    ->label(__('National ID'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('phone')
                    ->label(__('Phone'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                SelectFilter::make('gender')
                    ->label(__('Gender'))
                    ->options(Gender::class)
                    ->searchable(),
                SelectFilter::make('relation_to_head')
                    ->label(__('Relation To Head'))
                    ->options(RelationToHead::class)
                    ->searchable(),
                SelectFilter::make('employment_status')
                    ->label(__('Employment Status'))
                    ->options(EmploymentStatus::class)
                    ->searchable(),
                SelectFilter::make('health_status')
                    ->label(__('Health Status'))
                    ->options(HealthStatus::class)
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
