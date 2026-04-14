<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum FundingStatus: string implements HasColor, HasIcon, HasLabel
{
    case Unfunded = 'unfunded';
    case PartiallyFunded = 'partially_funded';
    case Funded = 'funded';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Unfunded => __('Unfunded'),
            self::PartiallyFunded => __('Partially Funded'),
            self::Funded => __('Funded'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Unfunded => 'danger',
            self::PartiallyFunded => 'warning',
            self::Funded => 'success',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::Banknotes;
    }
}
