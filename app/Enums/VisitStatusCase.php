<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum VisitStatusCase: string implements HasColor, HasIcon, HasLabel
{
    case NotRequired = 'not_required';
    case Pending = 'pending';

    case Completed = 'completed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::NotRequired => __('Not Required'),
            self::Pending => __('Pending'),
            self::Completed => __('Completed'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::NotRequired => 'gray',
            self::Pending => 'warning',
            self::Completed => 'success',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::CalendarDays;
    }
}
