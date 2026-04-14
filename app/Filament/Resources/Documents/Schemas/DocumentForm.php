<?php

namespace App\Filament\Resources\Documents\Schemas;

use App\Enums\DocumentCategory;
use App\Enums\DocumentType;
use App\Enums\DocumentVisibility;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Ownership'))
                    ->columns(2)
                    ->schema([
                        Select::make('family_id')
                            ->label(__('Family'))
                            ->relationship('family', 'name')
                            ->searchable()
                            ->preload(),
                        Select::make('charity_case_id')
                            ->label(__('Charity Case'))
                            ->relationship('charityCase', 'title')
                            ->searchable()
                            ->preload(),
                    ]),
                Section::make(__('Document Info'))
                    ->columns(2)
                    ->schema([
                        Select::make('type')
                            ->label(__('Type'))
                            ->options(DocumentType::class)
                            ->required(),
                        Select::make('category')
                            ->label(__('Category'))
                            ->options(DocumentCategory::class)
                            ->required(),
                        TextInput::make('title')
                            ->label(__('Title'))
                            ->required(),
                        Select::make('visibility')
                            ->label(__('Visibility'))
                            ->options(DocumentVisibility::class)
                            ->required(),
                    ]),
                Section::make(__('File'))
                    ->schema([
                        FileUpload::make('file_path')
                            ->label(__('File'))
                            ->required()
                            ->visibility('public')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
                Section::make(__('Dates & Flags'))
                    ->columns(2)
                    ->schema([
                        DatePicker::make('issued_at')
                            ->label(__('Issued At')),
                        DatePicker::make('expires_at')
                            ->label(__('Expires At')),
                        Toggle::make('is_required')
                            ->label(__('Is Required'))
                            ->required(),
                        Toggle::make('is_verified')
                            ->label(__('Is Verified'))
                            ->required(),
                    ]),
                Section::make(__('Notes'))
                    ->schema([
                        Textarea::make('notes')
                            ->label(__('Notes'))
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
