<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum Currency: string implements HasColor, HasIcon, HasLabel
{
    case EGP = 'EGP';
    case USD = 'USD';
    case SAR = 'SAR';

    public function getLabel(): ?string
    {
        return $this;
    }

    public function getColor(): string|array|null
    {
        return 'success';
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::Banknotes;
    }
}
