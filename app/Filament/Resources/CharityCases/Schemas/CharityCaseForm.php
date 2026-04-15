<?php

namespace App\Filament\Resources\CharityCases\Schemas;

use App\Enums\CasePriority;
use App\Enums\CaseStatus;
use App\Enums\VisitStatusCase;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CharityCaseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Case Information'))
                    ->columns(2)
                    ->schema([
                        Select::make('family_id')
                            ->label(__('Family'))
                            ->relationship('family', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('case_type_id')
                            ->label(__('Case Type'))
                            ->relationship('caseType', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        TextInput::make('code')
                            ->label(__('Code'))
                            ->unique(ignoreRecord: true)
                            ->disabled()
                            ->dehydrated(),
                        TextInput::make('title')
                            ->label(__('Title'))
                            ->required(),
                    ]),
                Section::make(__('Classification'))
                    ->columns(2)
                    ->schema([
                        Select::make('priority')
                            ->label(__('Priority'))
                            ->options(CasePriority::class)
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('status')
                            ->label(__('Status'))
                            ->options(CaseStatus::class)
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('visit_status')
                            ->label(__('Visit Status'))
                            ->options(VisitStatusCase::class)
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),
                Section::make(__('Description'))
                    ->schema([
                        Textarea::make('description')
                            ->label(__('Description'))
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
                Section::make(__('Amounts'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('requested_amount')
                            ->label(__('Requested Amount'))
                            ->required()
                            ->numeric()
                            ->currency()
                            ->default(0.0),
                        TextInput::make('approved_amount')
                            ->label(__('Approved Amount'))
                            ->required()
                            ->numeric()
                            ->currency()
                            ->default(0.0),
                    ]),
                Section::make(__('Timeline'))
                    ->columns(2)
                    ->schema([
                        DateTimePicker::make('registered_at')
                            ->label(__('Registered At')),
                        DateTimePicker::make('reviewed_at')
                            ->label(__('Reviewed At')),
                        DateTimePicker::make('approved_at')
                            ->label(__('Approved At')),
                        DateTimePicker::make('closed_at')
                            ->label(__('Closed At')),
                        DateTimePicker::make('last_visit_at')
                            ->label(__('Last Visit At')),
                        DateTimePicker::make('next_visit_at')
                            ->label(__('Next Visit At')),
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
