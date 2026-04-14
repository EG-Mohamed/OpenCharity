<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum AllocationStatus: string implements HasColor, HasIcon, HasLabel
{
    case Pending = 'pending';
    case Allocated = 'allocated';
    case Reversed = 'reversed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Pending => __('Pending'),
            self::Allocated => __('Allocated'),
            self::Reversed => __('Reversed'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::Allocated => 'success',
            self::Reversed => 'danger',
        };
    }

    public function getIcon(): Heroicon
    {
        return Heroicon::ArrowsRightLeft;
    }
}
