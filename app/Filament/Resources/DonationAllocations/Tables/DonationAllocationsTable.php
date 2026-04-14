<?php

namespace App\Filament\Resources\DonationAllocations\Tables;

use App\Enums\AllocationStatus;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class DonationAllocationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donation.amount')
                    ->label(__('Donation'))
                    ->money('EGP')
                    ->searchable(),
                TextColumn::make('donationTarget.title')
                    ->label(__('Donation Target'))
                    ->searchable(),
                TextColumn::make('family.name')
                    ->label(__('Family'))
                    ->searchable(),
                TextColumn::make('charityCase.title')
                    ->label(__('Charity Case'))
                    ->searchable(),
                TextColumn::make('assistanceSchedule.charityCase.title')
                    ->label(__('Assistance Schedule'))
                    ->searchable(),
                TextColumn::make('amount')
                    ->label(__('Amount'))
                    ->money('EGP')
                    ->sortable(),
                TextColumn::make('allocation_status')
                    ->label(__('Allocation Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('allocated_at')
                    ->label(__('Allocated At'))
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
                SelectFilter::make('allocation_status')
                    ->label(__('Allocation Status'))
                    ->options(AllocationStatus::class)
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
