<?php

namespace App\Filament\Resources\AssistanceDeliveries\Schemas;

use App\Enums\DeliveryStatus;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AssistanceDeliveryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('assistance_schedule_id')
                    ->relationship('assistanceSchedule', 'id')
                    ->required(),
                DateTimePicker::make('delivered_at'),
                Select::make('delivery_status')
                    ->options(DeliveryStatus::class)
                    ->required(),
                TextInput::make('received_by_name'),
                TextInput::make('received_by_phone')
                    ->tel(),
                TextInput::make('proof_file_path'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
