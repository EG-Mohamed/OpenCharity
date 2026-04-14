<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum PaymentMethod: string implements HasColor, HasIcon, HasLabel
{
    case Card = 'card';
    case Wallet = 'wallet';
    case BankTransfer = 'bank_transfer';
    case Cash = 'cash';
    case Kiosk = 'kiosk';
    case Other = 'other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Card => __('Card'),
            self::Wallet => __('Wallet'),
            self::BankTransfer => __('Bank Transfer'),
            self::Cash => __('Cash'),
            self::Kiosk => __('Kiosk'),
            self::Other => __('Other'),
        };
    }

    public function getColor(): string|array|null
    {
        return 'primary';
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::CreditCard;
    }
}
