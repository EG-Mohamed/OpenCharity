<?php

namespace App\Filament\Resources\Neighborhoods\Schemas;

use App\Models\City;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class NeighborhoodForm
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
                            ->live()
                            ->afterStateUpdated(fn (Set $set) => $set('city_id', null))
                            ->required(),

                        Select::make('city_id')
                            ->label(__('City'))
                            ->options(fn (Get $get) => City::query()
                                ->when($get('state_id'), fn ($query, $stateId) => $query->where('state_id', $stateId))
                                ->pluck('name', 'id'))
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
