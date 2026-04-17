<?php

namespace App\Filament\Resources\DonationTargets\Schemas;

use App\Enums\DonationTargetStatus;
use App\Enums\DonationTargetType;
use App\Filament\Resources\CharityCases\Schemas\CharityCaseSelect;
use App\Filament\Resources\Families\RelationManagers\DonationTargetsRelationManager;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DonationTargetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Target Info'))
                    ->columns(2)
                    ->schema([
                        Select::make('type')
                            ->label(__('Type'))
                            ->options(DonationTargetType::class)
                            ->searchable()
                            ->preload()
                            ->required(),
                        TextInput::make('title')
                            ->label(__('Title'))
                            ->required(),
                        ToggleButtons::make('status')
                            ->label(__('Status'))
                            ->options(DonationTargetStatus::class)
                            ->inline()
                            ->columnSpanFull()
                            ->required(),
                    ]),
                Section::make(__('Ownership'))
                    ->columns(2)
                    ->schema([
                        Select::make('family_id')
                            ->hiddenOn(DonationTargetsRelationManager::class)
                            ->label(__('Family'))
                            ->relationship('family', 'name')
                            ->searchable()
                            ->preload(),

                        CharityCaseSelect::make(),
                    ]),
                Section::make(__('Amounts'))
                    ->schema([
                        TextInput::make('goal_amount')
                            ->label(__('Goal Amount'))
                            ->required()
                            ->numeric()
                            ->currency()
                            ->default(0.0),
                    ]),
                Section::make(__('Period'))
                    ->columns(2)
                    ->schema([
                        DateTimePicker::make('starts_at')
                            ->label(__('Starts At')),
                        DateTimePicker::make('ends_at')
                            ->label(__('Ends At')),
                    ]),
                Section::make(__('Description'))
                    ->schema([
                        Textarea::make('description')
                            ->label(__('Description'))
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
