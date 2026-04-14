<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum VisitType: string implements HasColor, HasIcon, HasLabel
{
    case FieldVisit = 'field_visit';
    case OfficeInterview = 'office_interview';
    case PhoneCall = 'phone_call';
    case FollowUp = 'follow_up';
    case Reassessment = 'reassessment';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::FieldVisit => __('Field Visit'),
            self::OfficeInterview => __('Office Interview'),
            self::PhoneCall => __('Phone Call'),
            self::FollowUp => __('Follow Up'),
            self::Reassessment => __('Reassessment'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::FieldVisit => 'primary',
            self::OfficeInterview => 'info',
            self::PhoneCall => 'warning',
            self::FollowUp => 'success',
            self::Reassessment => 'danger',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return match ($this) {
            self::FieldVisit => Heroicon::MapPin,
            self::OfficeInterview => Heroicon::BuildingOffice,
            self::PhoneCall => Heroicon::Phone,
            self::FollowUp => Heroicon::ArrowPath,
            self::Reassessment => Heroicon::ClipboardDocumentCheck,
        };
    }
}
