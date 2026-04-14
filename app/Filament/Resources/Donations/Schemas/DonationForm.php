<?php

namespace App\Filament\Resources\Donations\Schemas;

use App\Enums\Currency;
use App\Enums\DonationStatus;
use App\Enums\PaymentGateway;
use App\Enums\PaymentMethod;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DonationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('donation_target_id')
                    ->relationship('donationTarget', 'title'),
                TextInput::make('donor_name'),
                TextInput::make('donor_email')
                    ->email(),
                TextInput::make('donor_phone')
                    ->tel(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Select::make('currency')
                    ->options(Currency::class)
                    ->required(),
                Select::make('status')
                    ->options(DonationStatus::class)
                    ->required(),
                Select::make('payment_gateway')
                    ->options(PaymentGateway::class)
                    ->required(),
                Select::make('payment_method')
                    ->options(PaymentMethod::class)
                    ->required(),
                TextInput::make('transaction_id'),
                DateTimePicker::make('paid_at'),
                Toggle::make('anonymous')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
