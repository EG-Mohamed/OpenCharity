<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum VisitStatusCase: string implements HasColor, HasIcon, HasLabel
{
    case NotRequired = 'not_required';
    case Pending = 'pending';
    case Scheduled = 'scheduled';
    case Completed = 'completed';
    case Overdue = 'overdue';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::NotRequired => __('Not Required'),
            self::Pending => __('Pending'),
            self::Scheduled => __('Scheduled'),
            self::Completed => __('Completed'),
            self::Overdue => __('Overdue'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::NotRequired => 'gray',
            self::Pending => 'warning',
            self::Scheduled => 'primary',
            self::Completed => 'success',
            self::Overdue => 'danger',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::CalendarDays;
    }
}
