<?php

namespace App\Filament\Resources\Families\Schemas;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class FamilyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Contact Information'))
                    ->columns(3)
                    ->schema([
                        TextInput::make('primary_contact_name')
                            ->label(__('Primary Contact Name'))
                            ->required(),
                        PhoneInput::make('primary_contact_phone')
                            ->label(__('Primary Contact Phone'))
                            ->required(),
                        PhoneInput::make('secondary_contact_phone')
                            ->label(__('Secondary Contact Phone')),
                    ]),
                AddressFields::make(),
                Section::make(__('Location Details'))
                    ->schema([
                        ToggleButtons::make('housing_status')
                            ->label(__('Housing Status'))
                            ->options(HousingStatus::class)
                            ->inline()
                            ->required(),
                    ]),
                Section::make(__('Financial'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('monthly_income')
                            ->label(__('Monthly Income'))
                            ->required()
                            ->numeric()
                            ->currency()
                            ->default(0.0),
                        Select::make('status')
                            ->label(__('Status'))
                            ->options(FamilyStatus::class)
                            ->searchable()
                            ->preload()
                            ->required(),
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
