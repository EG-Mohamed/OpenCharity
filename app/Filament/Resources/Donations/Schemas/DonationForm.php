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
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class DonationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Donor'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('donor_name')
                            ->label(__('Donor Name')),
                        TextInput::make('donor_email')
                            ->label(__('Donor Email'))
                            ->email(),
                        PhoneInput::make('donor_phone')
                            ->label(__('Donor Phone')),
                        Toggle::make('anonymous')
                            ->label(__('Anonymous'))
                            ->required(),
                    ]),
                Section::make(__('Donation'))
                    ->columns(2)
                    ->schema([
                        Select::make('donation_target_id')
                            ->label(__('Donation Target'))
                            ->relationship('donationTarget', 'title')
                            ->searchable()
                            ->preload(),
                        TextInput::make('amount')
                            ->label(__('Amount'))
                            ->required()
                            ->numeric()
                            ->prefix('EGP'),
                        Select::make('currency')
                            ->label(__('Currency'))
                            ->options(Currency::class)
                            ->required(),
                    ]),
                Section::make(__('Payment'))
                    ->columns(2)
                    ->schema([
                        Select::make('status')
                            ->label(__('Status'))
                            ->options(DonationStatus::class)
                            ->required(),
                        Select::make('payment_gateway')
                            ->label(__('Payment Gateway'))
                            ->options(PaymentGateway::class)
                            ->required(),
                        Select::make('payment_method')
                            ->label(__('Payment Method'))
                            ->options(PaymentMethod::class)
                            ->required(),
                        TextInput::make('transaction_id')
                            ->label(__('Transaction ID')),
                        DateTimePicker::make('paid_at')
                            ->label(__('Paid At')),
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
