<?php

namespace App\Filament\Resources\CaseTypes\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CaseTypeForm
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
                            ->unique(ignoreRecord: true)
                            ->disabled()
                            ->dehydrated(),
                    ]),
                Section::make(__('Description'))
                    ->schema([
                        Textarea::make('description')
                            ->label(__('Description'))
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
                Section::make(__('Settings'))
                    ->columns(1)
                    ->schema([
                        Toggle::make('is_active')
                            ->label(__('Is Active'))
                            ->required(),
                    ]),
            ])
            ->columns(2);
    }
}
