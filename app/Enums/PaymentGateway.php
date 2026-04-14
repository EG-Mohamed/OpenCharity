<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum PaymentGateway: string implements HasColor, HasIcon, HasLabel
{
    case Paymob = 'paymob';
    case Stripe = 'stripe';
    case Fawry = 'fawry';
    case Manual = 'manual';
    case Other = 'other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Paymob => __('Paymob'),
            self::Stripe => __('Stripe'),
            self::Fawry => __('Fawry'),
            self::Manual => __('Manual'),
            self::Other => __('Other'),
        };
    }

    public function getColor(): string|array|null
    {
        return 'info';
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::GlobeAlt;
    }
}
