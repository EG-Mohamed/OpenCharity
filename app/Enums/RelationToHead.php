<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum RelationToHead: string implements HasColor, HasIcon, HasLabel
{
    case Head = 'head';
    case Spouse = 'spouse';
    case Son = 'son';
    case Daughter = 'daughter';
    case Father = 'father';
    case Mother = 'mother';
    case Brother = 'brother';
    case Sister = 'sister';
    case Other = 'other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Head => __('Head'),
            self::Spouse => __('Spouse'),
            self::Son => __('Son'),
            self::Daughter => __('Daughter'),
            self::Father => __('Father'),
            self::Mother => __('Mother'),
            self::Brother => __('Brother'),
            self::Sister => __('Sister'),
            self::Other => __('Other'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Head => 'primary',
            self::Spouse => 'info',
            self::Son, self::Daughter => 'success',
            self::Father, self::Mother => 'warning',
            self::Brother, self::Sister => 'gray',
            self::Other => 'gray',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::User;
    }
}
