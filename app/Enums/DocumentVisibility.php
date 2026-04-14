<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum DocumentVisibility: string implements HasColor, HasIcon, HasLabel
{
    case FamilyOnly = 'family_only';
    case CaseOnly = 'case_only';
    case Shared = 'shared';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::FamilyOnly => __('Family Only'),
            self::CaseOnly => __('Case Only'),
            self::Shared => __('Shared'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::FamilyOnly => 'info',
            self::CaseOnly => 'warning',
            self::Shared => 'success',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::Eye;
    }
}
