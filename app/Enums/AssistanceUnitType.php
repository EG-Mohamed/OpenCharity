<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum AssistanceUnitType: string implements HasColor, HasIcon, HasLabel
{
    case Amount = 'amount';
    case Item = 'item';
    case Service = 'service';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Amount => __('Amount'),
            self::Item => __('Item'),
            self::Service => __('Service'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Amount => 'success',
            self::Item => 'warning',
            self::Service => 'info',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::Gift;
    }
}
