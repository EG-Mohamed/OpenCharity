<?php

namespace App\Filament\Resources\AssistanceSchedules\Schemas;

use App\Enums\FundingStatus;
use App\Enums\ScheduleFrequency;
use App\Enums\ScheduleStatus;
use App\Filament\Resources\CharityCases\Schemas\CharityCaseSelect;
use App\Models\AssistanceType;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
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
                        Placeholder::make('series_badge')
                            ->label(__('Series'))
                            ->content(fn (?object $record): string => $record?->parent_schedule_id ? __('Part of series') : __('Standalone schedule'))
                            ->hidden(fn (?object $record): bool => ! $record?->parent_schedule_id)
                            ->columnSpanFull(),
                        CharityCaseSelect::make(),
                        Select::make('assistance_type_id')
                            ->label(__('Assistance Type'))
                            ->relationship('assistanceType', 'name')
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function (Set $set, ?string $state): void {
                                if (! $state) {
                                    return;
                                }

                                $assistanceType = AssistanceType::query()->find($state);

                                if ($assistanceType && ! $assistanceType->is_recurring_allowed) {
                                    $set('frequency', ScheduleFrequency::Once);
                                    $set('end_date', null);
                                }
                            })
                            ->required(),
                        DatePicker::make('scheduled_date')
                            ->label(__('Scheduled Date')),
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
                            ->live()
                            ->disabled(fn (?object $record): bool => (bool) $record?->parent_schedule_id)
                            ->afterStateUpdated(function (Get $get, Set $set, ?ScheduleFrequency $state): void {
                                if ($state === ScheduleFrequency::Once) {
                                    $set('end_date', null);
                                }

                                $assistanceTypeId = $get('assistance_type_id');

                                if (! $assistanceTypeId) {
                                    return;
                                }

                                $assistanceType = AssistanceType::query()->find($assistanceTypeId);

                                if ($assistanceType && ! $assistanceType->is_recurring_allowed && $state !== ScheduleFrequency::Once) {
                                    $set('frequency', ScheduleFrequency::Once);
                                    $set('end_date', null);
                                }
                            })
                            ->required(),
                        DatePicker::make('end_date')
                            ->label(__('End Date'))
                            ->disabled(fn (?object $record): bool => (bool) $record?->parent_schedule_id)
                            ->visible(fn (Get $get): bool => $get('frequency') !== ScheduleFrequency::Once),
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
