<?php

namespace App\Filament\Resources\Visits\Schemas;

use App\Enums\VisitStatus;
use App\Enums\VisitType;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VisitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('charity_case_id')
                    ->relationship('charityCase', 'title')
                    ->required(),
                Select::make('visit_type')
                    ->options(VisitType::class)
                    ->required(),
                Select::make('status')
                    ->options(VisitStatus::class)
                    ->required(),
                DateTimePicker::make('scheduled_at'),
                DateTimePicker::make('visited_at'),
                Textarea::make('summary')
                    ->columnSpanFull(),
                Textarea::make('findings')
                    ->columnSpanFull(),
                Textarea::make('recommendations')
                    ->columnSpanFull(),
                DateTimePicker::make('next_visit_at'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
