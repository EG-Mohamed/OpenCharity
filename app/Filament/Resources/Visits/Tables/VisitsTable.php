<?php

namespace App\Filament\Resources\Visits\Tables;

use App\Enums\VisitStatus;
use App\Enums\VisitType;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class VisitsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('charityCase.code')
                    ->label(__('Charity Case'))
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
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('visited_at')
                    ->label(__('Visited At'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('next_visit_at')
                    ->label(__('Next Visit At'))
                    ->dateTime()
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
                SelectFilter::make('visit_type')
                    ->label(__('Visit Type'))
                    ->options(VisitType::class)
                    ->searchable(),
                SelectFilter::make('status')
                    ->label(__('Status'))
                    ->options(VisitStatus::class)
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
