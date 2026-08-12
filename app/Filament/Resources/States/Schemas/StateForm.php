<?php

namespace App\Filament\Resources\States\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Basic Information'))
                    ->schema([
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
