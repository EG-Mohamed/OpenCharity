<?php

namespace App\Filament\Resources\Families\Schemas;

use App\Models\City;
use App\Models\Neighborhood;
use App\Models\State;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use SalemAljebaly\FilamentMapPicker\MapPicker;

class AddressFields
{
    public static function make(): Section
    {
        return Section::make(__('Address Fields'))
            ->schema([
                Grid::make(3)->schema([
                    Select::make('state_id')
                        ->label(__('State'))
                        ->options(fn (): array => State::query()
                            ->where('status', true)
                            ->pluck('name', 'id')
                            ->all())
                        ->searchable()
                        ->preload()
                        ->live()
                        ->afterStateUpdated(function (Set $set): void {
                            $set('city_id', null);
                            $set('neighborhood_id', null);
                        })
                        ->required(),
                    Select::make('city_id')
                        ->label(__('City'))
                        ->options(fn (Get $get): array => City::query()
                            ->where('state_id', $get('state_id'))
                            ->pluck('name', 'id')
                            ->all())
                        ->searchable()
                        ->preload()
                        ->live()
                        ->afterStateUpdated(function (Set $set): void {
                            $set('neighborhood_id', null);
                        })
                        ->required(),
                    Select::make('neighborhood_id')
                        ->label(__('Neighborhood'))
                        ->options(fn (Get $get): array => Neighborhood::query()
                            ->where('state_id', $get('state_id'))
                            ->where('city_id', $get('city_id'))
                            ->pluck('name', 'id')
                            ->all())
                        ->searchable()
                        ->preload(),
                ])->columnSpanFull(),
                TextInput::make('address')
                    ->label(__('Address'))
                    ->columnSpanFull(),
                Hidden::make('latitude')->rules(['nullable', 'numeric']),
                Hidden::make('longitude')->rules(['nullable', 'numeric']),
                MapPicker::make('location')
                    ->hiddenLabel()
                    ->latlngFields('latitude', 'longitude')
                    ->searchable()
                    ->collapsibleSearch()
                    ->columnSpanFull()
                    ->draggable(),
            ]);
    }
}
