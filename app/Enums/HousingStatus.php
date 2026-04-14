<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum HousingStatus: string implements HasColor, HasIcon, HasLabel
{
    case Owned = 'owned';
    case Rented = 'rented';
    case Shared = 'shared';
    case Temporary = 'temporary';
    case Homeless = 'homeless';
    case Other = 'other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Owned => __('Owned'),
            self::Rented => __('Rented'),
            self::Shared => __('Shared'),
            self::Temporary => __('Temporary'),
            self::Homeless => __('Homeless'),
            self::Other => __('Other'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Owned => 'success',
            self::Rented => 'info',
            self::Shared => 'warning',
            self::Temporary => 'gray',
            self::Homeless => 'danger',
            self::Other => 'gray',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return match ($this) {
            self::Owned => Heroicon::HomeModern,
            self::Rented => Heroicon::Key,
            self::Shared => Heroicon::Users,
            self::Temporary => Heroicon::Clock,
            self::Homeless => Heroicon::ExclamationTriangle,
            self::Other => Heroicon::EllipsisHorizontalCircle,
        };
    }
}
