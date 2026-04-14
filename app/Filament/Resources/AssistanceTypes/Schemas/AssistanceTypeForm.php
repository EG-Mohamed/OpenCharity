<?php

namespace App\Filament\Resources\AssistanceTypes\Schemas;

use App\Enums\AssistanceUnitType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AssistanceTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('code')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('unit_type')
                    ->options(AssistanceUnitType::class)
                    ->required(),
                Toggle::make('is_recurring_allowed')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
