<?php

namespace App\Filament\Resources\CharityCases\Schemas;

use App\Enums\CasePriority;
use App\Enums\CaseStatus;
use App\Enums\VisitStatusCase;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CharityCaseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('family_id')
                    ->relationship('family', 'name')
                    ->required(),
                Select::make('case_type_id')
                    ->relationship('caseType', 'name')
                    ->required(),
                TextInput::make('code')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('priority')
                    ->options(CasePriority::class)
                    ->required(),
                Select::make('status')
                    ->options(CaseStatus::class)
                    ->required(),
                Select::make('visit_status')
                    ->options(VisitStatusCase::class)
                    ->required(),
                DateTimePicker::make('registered_at'),
                DateTimePicker::make('reviewed_at'),
                DateTimePicker::make('approved_at'),
                DateTimePicker::make('closed_at'),
                DateTimePicker::make('last_visit_at'),
                DateTimePicker::make('next_visit_at'),
                TextInput::make('requested_amount')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('approved_amount')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
