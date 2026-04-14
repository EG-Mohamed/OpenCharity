<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum Currency: string implements HasColor, HasIcon, HasLabel
{
    case EGP = 'EGP';
    case USD = 'USD';
    case SAR = 'SAR';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::EGP => __('EGP'),
            self::USD => __('USD'),
            self::SAR => __('SAR'),
        };
    }

    public function getColor(): string|array|null
    {
        return 'success';
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::Banknotes;
    }
}
