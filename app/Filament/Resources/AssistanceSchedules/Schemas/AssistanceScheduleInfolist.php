<?php

namespace App\Filament\Resources\AssistanceSchedules\Schemas;

use App\Models\AssistanceSchedule;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AssistanceScheduleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Schedule'))
                    ->columns(2)
                    ->schema([
                        IconEntry::make('is_parent')
                            ->label(__('Series'))
                            ->boolean()
                            ->state(fn (AssistanceSchedule $record): bool => $record->isParent()),
                        TextEntry::make('parent.id')
                            ->label(__('Parent Series'))
                            ->state(fn (AssistanceSchedule $record): ?string => $record->parent?->scheduled_date?->format('Y-m-d'))
                            ->placeholder('-'),
                        TextEntry::make('charityCase.full_identifier')
                            ->label(__('Charity Case'))
                            ->badge(),
                        TextEntry::make('assistanceType.name')
                            ->label(__('Assistance Type')),
                        TextEntry::make('scheduled_date')
                            ->label(__('Scheduled Date'))
                            ->date()
                            ->placeholder('-'),
                        TextEntry::make('scheduled_time')
                            ->label(__('Scheduled Time'))
                            ->time()
                            ->placeholder('-'),
                    ]),
                Section::make(__('Amount'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('amount')
                            ->label(__('Amount'))
                            ->money('EGP')
                            ->placeholder('-'),
                        TextEntry::make('quantity')
                            ->label(__('Quantity'))
                            ->numeric()
                            ->placeholder('-'),
                        TextEntry::make('frequency')
                            ->label(__('Frequency'))
                            ->badge(),
                        TextEntry::make('end_date')
                            ->label(__('End Date'))
                            ->date()
                            ->placeholder('-'),
                    ]),
                Section::make(__('Status'))
                    ->columns(2)
                    ->schema([
                        TextEntry::make('status')
                            ->label(__('Status'))
                            ->badge(),
                        TextEntry::make('funding_status')
                            ->label(__('Funding Status'))
                            ->badge(),
                        TextEntry::make('occurrence_number')
                            ->label(__('Occurrence Number'))
                            ->placeholder('-'),
                        TextEntry::make('parent.scheduled_date')
                            ->label(__('Parent Scheduled Date'))
                            ->date()
                            ->placeholder('-'),
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
