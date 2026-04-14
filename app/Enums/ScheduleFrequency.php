<?php

namespace App\Enums;

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

    public function getIcon(): ?Heroicon
    {
        return Heroicon::Calendar;
    }
}
