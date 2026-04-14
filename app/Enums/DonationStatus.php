<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum DonationStatus: string implements HasColor, HasIcon, HasLabel
{
    case Pending = 'pending';
    case Paid = 'paid';
    case Failed = 'failed';
    case Refunded = 'refunded';
    case Canceled = 'canceled';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Pending => __('Pending'),
            self::Paid => __('Paid'),
            self::Failed => __('Failed'),
            self::Refunded => __('Refunded'),
            self::Canceled => __('Canceled'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::Paid => 'success',
            self::Failed, self::Canceled => 'danger',
            self::Refunded => 'gray',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::CreditCard;
    }
}
