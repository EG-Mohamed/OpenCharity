<?php

namespace App\Filament\Resources\Families\Schemas;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use App\Services\EgyptianIDParser;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Hamcrest\Core\Set;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class FamilyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Contact Information'))
                    ->columns(4)
                    ->schema([
                        TextInput::make('primary_contact_name')
                            ->label(__('Primary Contact Name'))
                            ->required(),
                        PhoneInput::make('primary_contact_phone')
                            ->label(__('Primary Contact Phone'))
                            ->required(),
                        PhoneInput::make('secondary_contact_phone')
                            ->label(__('Secondary Contact Phone')),
                        ToggleButtons::make('status')
                            ->label(__('Status'))
                            ->options(FamilyStatus::class)
                            ->inline()
                            ->required(),
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
