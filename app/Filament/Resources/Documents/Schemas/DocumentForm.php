<?php

namespace App\Filament\Resources\Documents\Schemas;

use App\Enums\DocumentCategory;
use App\Enums\DocumentType;
use App\Enums\DocumentVisibility;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('family_id')
                    ->relationship('family', 'name'),
                Select::make('charity_case_id')
                    ->relationship('charityCase', 'title'),
                Select::make('type')
                    ->options(DocumentType::class)
                    ->required(),
                Select::make('category')
                    ->options(DocumentCategory::class)
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('file_path')
                    ->required(),
                TextInput::make('file_name')
                    ->required(),
                TextInput::make('mime_type'),
                TextInput::make('file_size')
                    ->required()
                    ->numeric()
                    ->default(0),
                Select::make('visibility')
                    ->options(DocumentVisibility::class)
                    ->required(),
                DatePicker::make('issued_at'),
                DatePicker::make('expires_at'),
                Toggle::make('is_required')
                    ->required(),
                Toggle::make('is_verified')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
