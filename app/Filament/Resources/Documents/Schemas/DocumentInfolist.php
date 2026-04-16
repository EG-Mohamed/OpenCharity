<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DocumentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Ownership'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('family.name')
                            ->label(__('Family'))
                            ->placeholder('-')
                            ->badge(),
                        TextEntry::make('charityCase.full_identifier')
                            ->label(__('Charity Case'))
                            ->placeholder('-')
                            ->badge(),
                    ]),
                Section::make(__('Document Info'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('type')
                            ->label(__('Type'))
                            ->badge(),
                        TextEntry::make('category')
                            ->label(__('Category'))
                            ->badge(),
                        TextEntry::make('title')
                            ->label(__('Title')),
                        TextEntry::make('visibility')
                            ->label(__('Visibility'))
                            ->badge(),
                    ]),
                Section::make(__('File'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('file_name')
                            ->label(__('File Name'))
                            ->placeholder('-')
                            ->copyable(),
                        TextEntry::make('mime_type')
                            ->label(__('MIME Type'))
                            ->placeholder('-'),
                        TextEntry::make('file_size')
                            ->label(__('File Size'))
                            ->formatStateUsing(fn (?int $state): string => number_format(($state ?? 0) / 1024, 1).' KB'),
                        TextEntry::make('file_path')
                            ->label(__('File Path'))
                            ->placeholder('-')
                            ->copyable(),
                    ]),
                Section::make(__('Dates & Flags'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('issued_at')
                            ->label(__('Issued At'))
                            ->date()
                            ->placeholder('-'),
                        TextEntry::make('expires_at')
                            ->label(__('Expires At'))
                            ->date()
                            ->placeholder('-'),
                        IconEntry::make('is_required')
                            ->label(__('Is Required'))
                            ->boolean(),
                        IconEntry::make('is_verified')
                            ->label(__('Is Verified'))
                            ->boolean(),
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
