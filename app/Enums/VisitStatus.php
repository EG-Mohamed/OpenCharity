<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum VisitStatus: string implements HasColor, HasIcon, HasLabel
{
    case Scheduled = 'scheduled';
    case Completed = 'completed';
    case Canceled = 'canceled';
    case Missed = 'missed';
    case Postponed = 'postponed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Scheduled => __('Scheduled'),
            self::Completed => __('Completed'),
            self::Canceled => __('Canceled'),
            self::Missed => __('Missed'),
            self::Postponed => __('Postponed'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Scheduled => 'primary',
            self::Completed => 'success',
            self::Canceled => 'danger',
            self::Missed => 'warning',
            self::Postponed => 'gray',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::CalendarDays;
    }
}
