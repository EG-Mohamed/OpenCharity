<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum EducationStatus: string implements HasColor, HasIcon, HasLabel
{
    case None = 'none';
    case Primary = 'primary';
    case Preparatory = 'preparatory';
    case Secondary = 'secondary';
    case Diploma = 'diploma';
    case University = 'university';
    case Postgraduate = 'postgraduate';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::None => __('None'),
            self::Primary => __('Primary'),
            self::Preparatory => __('Preparatory'),
            self::Secondary => __('Secondary'),
            self::Diploma => __('Diploma'),
            self::University => __('University'),
            self::Postgraduate => __('Postgraduate'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::None => 'gray',
            self::Primary, self::Preparatory => 'info',
            self::Secondary, self::Diploma => 'warning',
            self::University, self::Postgraduate => 'success',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::AcademicCap;
    }
}
