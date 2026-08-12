<?php

namespace App\Filament\Resources\Cities\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Basic Information'))
                    ->schema([
                        Select::make('state_id')
                            ->label(__('State'))
                            ->relationship('state', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('name')
                            ->label(__('Name'))
                            ->required()
                            ->translatableTabs(),

                        Toggle::make('status')
                            ->label(__('Is Active'))
                            ->default(true)
                            ->required(),
                    ]),
            ]);
    }
}
