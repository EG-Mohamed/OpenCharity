<?php

namespace App\Filament\Resources\AssistanceSchedules\Schemas;

use App\Enums\FundingStatus;
use App\Enums\ScheduleFrequency;
use App\Enums\ScheduleStatus;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AssistanceScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('charity_case_id')
                    ->relationship('charityCase', 'title')
                    ->required(),
                Select::make('assistance_type_id')
                    ->relationship('assistanceType', 'name')
                    ->required(),
                DatePicker::make('scheduled_date'),
                TimePicker::make('scheduled_time'),
                TextInput::make('amount')
                    ->numeric(),
                TextInput::make('quantity')
                    ->numeric(),
                Select::make('frequency')
                    ->options(ScheduleFrequency::class)
                    ->required(),
                Select::make('status')
                    ->options(ScheduleStatus::class)
                    ->required(),
                Select::make('funding_status')
                    ->options(FundingStatus::class)
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
