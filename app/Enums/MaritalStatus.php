<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum MaritalStatus: string implements HasColor, HasIcon, HasLabel
{
    case Single = 'single';
    case Married = 'married';
    case Divorced = 'divorced';
    case Widowed = 'widowed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Single => __('Single'),
            self::Married => __('Married'),
            self::Divorced => __('Divorced'),
            self::Widowed => __('Widowed'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Single => 'gray',
            self::Married => 'success',
            self::Divorced => 'warning',
            self::Widowed => 'danger',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::Heart;
    }
}
