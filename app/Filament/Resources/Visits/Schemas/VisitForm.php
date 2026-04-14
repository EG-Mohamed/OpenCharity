<?php

namespace App\Filament\Resources\Visits\Schemas;

use App\Enums\VisitStatus;
use App\Enums\VisitType;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VisitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Visit Details'))
                    ->columns(2)
                    ->schema([
                        Select::make('charity_case_id')
                            ->label(__('Charity Case'))
                            ->relationship('charityCase', 'title')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('visit_type')
                            ->label(__('Visit Type'))
                            ->options(VisitType::class)
                            ->required(),
                        Select::make('status')
                            ->label(__('Status'))
                            ->options(VisitStatus::class)
                            ->required(),
                        DateTimePicker::make('scheduled_at')
                            ->label(__('Scheduled At')),
                        DateTimePicker::make('visited_at')
                            ->label(__('Visited At')),
                        DateTimePicker::make('next_visit_at')
                            ->label(__('Next Visit At')),
                    ]),
                Section::make(__('Findings'))
                    ->schema([
                        Textarea::make('summary')
                            ->label(__('Summary'))
                            ->columnSpanFull(),
                        Textarea::make('findings')
                            ->label(__('Findings'))
                            ->columnSpanFull(),
                        Textarea::make('recommendations')
                            ->label(__('Recommendations'))
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
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
