<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum DonationTargetType: string implements HasColor, HasIcon, HasLabel
{
    case Family = 'family';
    case Case = 'case';
    case Campaign = 'campaign';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Family => __('Family'),
            self::Case => __('Case'),
            self::Campaign => __('Campaign'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Family => 'info',
            self::Case => 'warning',
            self::Campaign => 'success',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::Flag;
    }
}
