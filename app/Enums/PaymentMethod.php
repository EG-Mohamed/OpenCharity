<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum PaymentMethod: string implements HasColor, HasIcon, HasLabel
{
    case Card = 'card';
    case Wallet = 'wallet';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Card => __('Card'),
            self::Wallet => __('Wallet'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Card => 'primary',
            self::Wallet => 'success',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return match ($this) {
            self::Card => Heroicon::CreditCard,
            self::Wallet => Heroicon::Wallet,
        };
    }
}
