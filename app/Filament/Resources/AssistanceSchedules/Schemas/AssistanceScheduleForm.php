<?php

namespace App\Filament\Resources\AssistanceSchedules\Schemas;

use App\Enums\FundingStatus;
use App\Enums\ScheduleFrequency;
use App\Enums\ScheduleStatus;
use App\Filament\Resources\CharityCases\Schemas\CharityCaseSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AssistanceScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Schedule'))
                    ->columns(2)
                    ->schema([
                        CharityCaseSelect::make(),
                        Select::make('assistance_type_id')
                            ->label(__('Assistance Type'))
                            ->relationship('assistanceType', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        DatePicker::make('scheduled_date')
                            ->label(__('Scheduled Date')),
                        TimePicker::make('scheduled_time')
                            ->label(__('Scheduled Time')),
                    ]),
                Section::make(__('Amount'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('amount')
                            ->label(__('Amount'))
                            ->numeric()
                            ->currency(),
                        TextInput::make('quantity')
                            ->label(__('Quantity'))
                            ->numeric(),
                        Select::make('frequency')
                            ->label(__('Frequency'))
                            ->options(ScheduleFrequency::class)
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),
                Section::make(__('Status'))
                    ->columns(2)
                    ->schema([
                        Select::make('status')
                            ->label(__('Status'))
                            ->options(ScheduleStatus::class)
                            ->searchable()
                            ->preload()
                            ->required(),
                        Select::make('funding_status')
                            ->label(__('Funding Status'))
                            ->options(FundingStatus::class)
                            ->searchable()
                            ->preload()
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
