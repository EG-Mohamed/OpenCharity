<?php

namespace App\Filament\Resources\DonationTargets\Schemas;

use App\Enums\DonationTargetStatus;
use App\Enums\DonationTargetType;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DonationTargetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                    ->options(DonationTargetType::class)
                    ->required(),
                Select::make('family_id')
                    ->relationship('family', 'name'),
                Select::make('charity_case_id')
                    ->relationship('charityCase', 'title'),
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('goal_amount')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('collected_amount')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Select::make('status')
                    ->options(DonationTargetStatus::class)
                    ->required(),
                DateTimePicker::make('starts_at'),
                DateTimePicker::make('ends_at'),
            ]);
    }
}
