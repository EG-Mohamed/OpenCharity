<?php

namespace App\Enums;

use BackedEnum;
use Carbon\Carbon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum ScheduleFrequency: string implements HasColor, HasIcon, HasLabel
{
    case Once = 'once';
    case Daily = 'daily';
    case Weekly = 'weekly';
    case Monthly = 'monthly';
    case Quarterly = 'quarterly';
    case Yearly = 'yearly';
    case Custom = 'custom';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Once => __('Once'),
            self::Daily => __('Daily'),
            self::Weekly => __('Weekly'),
            self::Monthly => __('Monthly'),
            self::Quarterly => __('Quarterly'),
            self::Yearly => __('Yearly'),
            self::Custom => __('Custom'),
        };
    }

    public function getColor(): string|array|null
    {
        return 'info';
    }

    public function getIcon(): string|BackedEnum|null
    {
        return Heroicon::Calendar;
    }

    public function nextDate(Carbon $from): ?Carbon
    {
        return match ($this) {
            self::Once, self::Custom => null,
            self::Daily => $from->copy()->addDay(),
            self::Weekly => $from->copy()->addWeek(),
            self::Monthly => $from->copy()->addMonth(),
            self::Quarterly => $from->copy()->addMonths(3),
            self::Yearly => $from->copy()->addYear(),
        };
    }
}
