<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum FamilyStatus: string implements HasColor, HasIcon, HasLabel
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Archived = 'archived';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Active => __('Active'),
            self::Inactive => __('Inactive'),
            self::Archived => __('Archived'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Active => 'success',
            self::Inactive => 'warning',
            self::Archived => 'gray',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return match ($this) {
            self::Active => Heroicon::CheckCircle,
            self::Inactive => Heroicon::PauseCircle,
            self::Archived => Heroicon::ArchiveBox,
        };
    }
}
