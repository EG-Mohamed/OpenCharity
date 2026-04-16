<?php

namespace App\Filament\Resources\Visits\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VisitInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Visit Details'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('charityCase.code')
                            ->label(__('Charity Case'))
                            ->badge(),
                        TextEntry::make('charityCase.family.code')
                            ->label(__('Family'))
                            ->badge(),
                        TextEntry::make('visit_type')
                            ->label(__('Visit Type'))
                            ->badge(),
                        TextEntry::make('status')
                            ->label(__('Status'))
                            ->badge(),
                        TextEntry::make('scheduled_at')
                            ->label(__('Scheduled At'))
                            ->date()
                            ->placeholder('-'),
                        TextEntry::make('visited_at')
                            ->label(__('Visited At'))
                            ->date()
                            ->placeholder('-'),
                        TextEntry::make('next_visit_at')
                            ->label(__('Next Visit At'))
                            ->date()
                            ->placeholder('-'),
                    ]),
                Section::make(__('Findings'))
                    ->schema([
                        TextEntry::make('summary')
                            ->label(__('Summary'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('findings')
                            ->label(__('Findings'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('recommendations')
                            ->label(__('Recommendations'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
                Section::make(__('Notes'))
                    ->schema([
                        TextEntry::make('notes')
                            ->label(__('Notes'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
