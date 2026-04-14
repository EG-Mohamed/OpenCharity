<?php

namespace App\Filament\Resources\Donations\Tables;

use App\Enums\Currency;
use App\Enums\DonationStatus;
use App\Enums\PaymentGateway;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class DonationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donationTarget.title')
                    ->label(__('Donation Target'))
                    ->searchable(),
                TextColumn::make('donor_name')
                    ->label(__('Donor Name'))
                    ->searchable(),
                TextColumn::make('donor_email')
                    ->label(__('Donor Email'))
                    ->searchable(),
                TextColumn::make('donor_phone')
                    ->label(__('Donor Phone'))
                    ->searchable(),
                TextColumn::make('amount')
                    ->label(__('Amount'))
                    ->currency()
                    ->sortable(),
                TextColumn::make('currency')
                    ->label(__('Currency'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label(__('Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('payment_gateway')
                    ->label(__('Payment Gateway'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('payment_method')
                    ->label(__('Payment Method'))
                    ->badge()
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('transaction_id')
                    ->label(__('Transaction ID'))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('paid_at')
                    ->label(__('Paid At'))
                    ->dateTime()
                    ->sortable(),
                IconColumn::make('anonymous')
                    ->label(__('Anonymous'))
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
                TextColumn::make('deleted_at')
                    ->label(__('Deleted At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label(__('Status'))
                    ->options(DonationStatus::class)
                    ->searchable(),
                SelectFilter::make('currency')
                    ->label(__('Currency'))
                    ->options(Currency::class)
                    ->searchable(),
                SelectFilter::make('payment_gateway')
                    ->label(__('Payment Gateway'))
                    ->options(PaymentGateway::class)
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
