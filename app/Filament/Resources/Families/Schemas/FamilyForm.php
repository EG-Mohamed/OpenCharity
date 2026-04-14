<?php

namespace App\Filament\Resources\Families\Schemas;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class FamilyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Basic Information'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('code')
                            ->label(__('Code'))
                            ->required(),
                        TextInput::make('name')
                            ->label(__('Name'))
                            ->required(),
                        TextInput::make('national_id')
                            ->label(__('National ID')),
                        TextInput::make('members_count')
                            ->label(__('Members Count'))
                            ->required()
                            ->numeric()
                            ->default(1),
                    ]),
                Section::make(__('Contact Information'))
                    ->columns(2)
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
                Section::make(__('Location'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('governorate')
                            ->label(__('Governorate'))
                            ->required(),
                        TextInput::make('city')
                            ->label(__('City'))
                            ->required(),
                        TextInput::make('district')
                            ->label(__('District')),
                        Select::make('housing_status')
                            ->label(__('Housing Status'))
                            ->options(HousingStatus::class)
                            ->required(),
                        Textarea::make('address')
                            ->label(__('Address'))
                            ->columnSpanFull(),
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
