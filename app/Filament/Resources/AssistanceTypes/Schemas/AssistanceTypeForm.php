<?php

namespace App\Filament\Resources\AssistanceTypes\Schemas;

use App\Enums\AssistanceUnitType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AssistanceTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Basic'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label(__('Name'))
                            ->required(),
                        TextInput::make('code')
                            ->label(__('Code'))
                            ->required(),
                        Select::make('unit_type')
                            ->label(__('Unit Type'))
                            ->options(AssistanceUnitType::class)
                            ->required(),
                    ]),
                Section::make(__('Description'))
                    ->schema([
                        Textarea::make('description')
                            ->label(__('Description'))
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
                Section::make(__('Settings'))
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_recurring_allowed')
                            ->label(__('Is Recurring Allowed'))
                            ->required(),
                        Toggle::make('is_active')
                            ->label(__('Is Active'))
                            ->required(),
                    ]),
            ])
            ->columns(2);
    }
}
