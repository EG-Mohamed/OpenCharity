<?php

namespace App\Filament\Resources\Diseases\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DiseaseForm
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
                            ->required()
                            ->columnSpanFull()
                            ->unique(ignoreRecord: true),
                        ToggleButtons::make('is_chronic')
                            ->label(__('Chronic Disease'))
                            ->inline()->boolean()->required()
                            ->default(true),
                        ToggleButtons::make('is_active')
                            ->label(__('Is Active'))
                            ->inline()->boolean()->required()
                            ->default(true),
                    ]),
            ]);
    }
}
