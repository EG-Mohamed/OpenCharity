<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum ScheduleStatus: string implements HasColor, HasIcon, HasLabel
{
    case Draft = 'draft';
    case Scheduled = 'scheduled';
    case Approved = 'approved';
    case InProgress = 'in_progress';
    case Completed = 'completed';
    case Postponed = 'postponed';
    case Canceled = 'canceled';
    case Failed = 'failed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => __('Draft'),
            self::Scheduled => __('Scheduled'),
            self::Approved => __('Approved'),
            self::InProgress => __('In Progress'),
            self::Completed => __('Completed'),
            self::Postponed => __('Postponed'),
            self::Canceled => __('Canceled'),
            self::Failed => __('Failed'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Scheduled => 'primary',
            self::Approved, self::Completed => 'success',
            self::InProgress => 'info',
            self::Postponed => 'warning',
            self::Canceled, self::Failed => 'danger',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::CalendarDays;
    }
}
