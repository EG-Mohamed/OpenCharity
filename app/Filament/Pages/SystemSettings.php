<?php

namespace App\Filament\Pages;


use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Outerweb\FilamentSettings\Pages\Settings;

class SystemSettings extends Settings
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tabs\Tab::make(__('General'))
                            ->schema([
                                TextInput::make('general.brand_name')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
