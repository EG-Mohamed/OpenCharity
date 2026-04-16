<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum ScheduleStatus: string implements HasColor, HasIcon, HasLabel
{
    case Draft = 'draft';
    case Scheduled = 'scheduled';
    case Approved = 'approved';
    case Completed = 'completed';
    case Canceled = 'canceled';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => __('Draft'),
            self::Scheduled => __('Scheduled'),
            self::Approved => __('Approved'),
            self::Completed => __('Completed'),
            self::Canceled => __('Canceled'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Scheduled => 'primary',
            self::Approved, self::Completed => 'success',
            self::Canceled => 'danger',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::CalendarDays;
    }
}
