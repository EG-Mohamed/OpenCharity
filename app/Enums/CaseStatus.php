<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum CaseStatus: string implements HasColor, HasIcon, HasLabel
{
    case Draft = 'draft';
    case PendingReview = 'pending_review';
    case NeedMoreInfo = 'need_more_info';
    case Approved = 'approved';
    case Rejected = 'rejected';
    case Scheduled = 'scheduled';
    case InProgress = 'in_progress';
    case Completed = 'completed';
    case Closed = 'closed';
    case Canceled = 'canceled';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => __('Draft'),
            self::PendingReview => __('Pending Review'),
            self::NeedMoreInfo => __('Need More Info'),
            self::Approved => __('Approved'),
            self::Rejected => __('Rejected'),
            self::Scheduled => __('Scheduled'),
            self::InProgress => __('In Progress'),
            self::Completed => __('Completed'),
            self::Closed => __('Closed'),
            self::Canceled => __('Canceled'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::PendingReview => 'warning',
            self::NeedMoreInfo => 'info',
            self::Approved, self::Completed => 'success',
            self::Rejected, self::Canceled => 'danger',
            self::Scheduled => 'primary',
            self::InProgress => 'info',
            self::Closed => 'gray',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return match ($this) {
            self::Draft => Heroicon::DocumentText,
            self::PendingReview => Heroicon::Clock,
            self::NeedMoreInfo => Heroicon::QuestionMarkCircle,
            self::Approved => Heroicon::CheckBadge,
            self::Rejected => Heroicon::XCircle,
            self::Scheduled => Heroicon::CalendarDays,
            self::InProgress => Heroicon::ArrowPath,
            self::Completed => Heroicon::CheckCircle,
            self::Closed => Heroicon::LockClosed,
            self::Canceled => Heroicon::NoSymbol,
        };
    }
}
