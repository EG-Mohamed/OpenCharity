<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum EmploymentStatus: string implements HasColor, HasIcon, HasLabel
{
    case Unemployed = 'unemployed';
    case Employed = 'employed';
    case SelfEmployed = 'self_employed';
    case Retired = 'retired';
    case Student = 'student';
    case UnableToWork = 'unable_to_work';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Unemployed => __('Unemployed'),
            self::Employed => __('Employed'),
            self::SelfEmployed => __('Self Employed'),
            self::Retired => __('Retired'),
            self::Student => __('Student'),
            self::UnableToWork => __('Unable To Work'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Unemployed => 'danger',
            self::Employed, self::SelfEmployed => 'success',
            self::Retired => 'warning',
            self::Student => 'info',
            self::UnableToWork => 'gray',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::Briefcase;
    }
}
