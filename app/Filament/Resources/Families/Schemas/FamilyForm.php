<?php

namespace App\Filament\Resources\Families\Schemas;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FamilyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('primary_contact_name')
                    ->required(),
                TextInput::make('primary_contact_phone')
                    ->tel()
                    ->required(),
                TextInput::make('secondary_contact_phone')
                    ->tel(),
                TextInput::make('national_id'),
                TextInput::make('governorate')
                    ->required(),
                TextInput::make('city')
                    ->required(),
                TextInput::make('district'),
                Textarea::make('address')
                    ->columnSpanFull(),
                Select::make('housing_status')
                    ->options(HousingStatus::class)
                    ->required(),
                TextInput::make('monthly_income')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('members_count')
                    ->required()
                    ->numeric()
                    ->default(1),
                Textarea::make('notes')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(FamilyStatus::class)
                    ->required(),
            ]);
    }
}
