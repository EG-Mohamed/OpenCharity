<?php

namespace App\Filament\Resources\Neighborhoods\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NeighborhoodInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),

                TextEntry::make('city_id'),

                TextEntry::make('state_id'),

                TextEntry::make('name'),

                TextEntry::make('status'),

                TextEntry::make('created_at')
                    ->label('Created Date')
                    ->dateTime(),

                TextEntry::make('updated_at')
                    ->label('Last Modified Date')
                    ->dateTime(),
            ]);
    }
}
