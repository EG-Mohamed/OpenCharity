<?php

namespace App\Filament\Resources\DonationAllocations\Schemas;

use App\Enums\AllocationStatus;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DonationAllocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Allocation'))
                    ->columns(2)
                    ->schema([
                        Select::make('donation_id')
                            ->label(__('Donation'))
                            ->relationship('donation', 'id')
                            ->getOptionLabelFromRecordUsing(fn ($record): string => __('EGP').' '.number_format((float) $record->amount, 2))
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('donation_target_id')
                            ->label(__('Donation Target'))
                            ->relationship('donationTarget', 'title')
                            ->searchable()
                            ->preload(),
                        Select::make('family_id')
                            ->label(__('Family'))
                            ->relationship('family', 'name')
                            ->searchable()
                            ->preload(),
                        Select::make('charity_case_id')
                            ->label(__('Charity Case'))
                            ->relationship('charityCase', 'title')
                            ->searchable()
                            ->preload(),
                        Select::make('assistance_schedule_id')
                            ->label(__('Assistance Schedule'))
                            ->relationship('assistanceSchedule', 'id')
                            ->getOptionLabelFromRecordUsing(fn ($record): string => $record->charityCase?->title ? "{$record->charityCase->title} (#{$record->id})" : (string) $record->id)
                            ->searchable()
                            ->preload(),
                    ]),
                Section::make(__('Amount & Status'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('amount')
                            ->label(__('Amount'))
                            ->required()
                            ->numeric()
                            ->prefix('EGP'),
                        Select::make('allocation_status')
                            ->label(__('Allocation Status'))
                            ->options(AllocationStatus::class)
                            ->required(),
                        DateTimePicker::make('allocated_at')
                            ->label(__('Allocated At')),
                    ]),
                Section::make(__('Notes'))
                    ->schema([
                        Textarea::make('notes')
                            ->label(__('Notes'))
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
