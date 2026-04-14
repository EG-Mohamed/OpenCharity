<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum DonationTargetStatus: string implements HasColor, HasIcon, HasLabel
{
    case Draft = 'draft';
    case Active = 'active';
    case Paused = 'paused';
    case Completed = 'completed';
    case Archived = 'archived';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => __('Draft'),
            self::Active => __('Active'),
            self::Paused => __('Paused'),
            self::Completed => __('Completed'),
            self::Archived => __('Archived'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Active => 'success',
            self::Paused => 'warning',
            self::Completed => 'info',
            self::Archived => 'gray',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::Flag;
    }
}
