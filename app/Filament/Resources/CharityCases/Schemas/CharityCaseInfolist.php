<?php

namespace App\Filament\Resources\CharityCases\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CharityCaseInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Case Information'))
                    ->columns(3)
                    ->schema([
                        TextEntry::make('code')
                            ->label(__('Code'))
                            ->badge()
                            ->copyable(),
                        TextEntry::make('family.name')
                            ->label(__('Family'))
                            ->badge(),
                        TextEntry::make('familyMember.name')
                            ->label(__('Family Member'))
                            ->badge(),
                        TextEntry::make('caseType.name')
                            ->label(__('Case Type'))
                            ->badge(),
                        TextEntry::make('title')
                            ->label(__('Title'))
                            ->placeholder('-')
                            ->columnSpan(2),
                    ]),
                Section::make(__('Classification'))
                    ->columns(3)
                    ->schema([
                        TextEntry::make('priority')
                            ->label(__('Priority'))
                            ->badge(),
                        TextEntry::make('status')
                            ->label(__('Status'))
                            ->badge(),
                        TextEntry::make('visit_status')
                            ->label(__('Visit Status'))
                            ->badge(),
                    ]),
                Section::make(__('Amounts'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('requested_amount')
                            ->label(__('Requested Amount'))
                            ->currency(),
                        TextEntry::make('approved_amount')
                            ->label(__('Approved Amount'))
                            ->currency(),
                    ]),
                Section::make(__('Timeline'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('registered_at')
                            ->label(__('Registered At'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('reviewed_at')
                            ->label(__('Reviewed At'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('approved_at')
                            ->label(__('Approved At'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('closed_at')
                            ->label(__('Closed At'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('last_visit_at')
                            ->label(__('Last Visit At'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('next_visit_at')
                            ->label(__('Next Visit At'))
                            ->dateTime()
                            ->placeholder('-'),
                    ]),
                Section::make(__('Description'))
                    ->schema([
                        TextEntry::make('description')
                            ->label(__('Description'))
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
