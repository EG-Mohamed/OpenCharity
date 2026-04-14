<?php

namespace App\Filament\Resources\DonationAllocations\Schemas;

use App\Enums\AllocationStatus;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DonationAllocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('donation_id')
                    ->relationship('donation', 'id')
                    ->required(),
                Select::make('donation_target_id')
                    ->relationship('donationTarget', 'title'),
                Select::make('family_id')
                    ->relationship('family', 'name'),
                Select::make('charity_case_id')
                    ->relationship('charityCase', 'title'),
                Select::make('assistance_schedule_id')
                    ->relationship('assistanceSchedule', 'id'),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Select::make('allocation_status')
                    ->options(AllocationStatus::class)
                    ->required(),
                DateTimePicker::make('allocated_at'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
