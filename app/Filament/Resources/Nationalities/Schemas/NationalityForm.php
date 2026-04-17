<?php

namespace App\Filament\Resources\Nationalities\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NationalityForm
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
                            ->unique(ignoreRecord: true)
                            ->translatableTabs()->columnSpanFull(),
                        ToggleButtons::make('is_active')
                            ->label(__('Is Active'))
                            ->inline()->boolean()
                            ->default(true),
                    ]),
            ]);
    }
}
