<?php

namespace App\Enums;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum HealthStatus: string implements HasColor, HasIcon, HasLabel
{
    case Healthy = 'healthy';
    case Unhealthy = 'unhealthy';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Healthy => __('Healthy'),
            self::Unhealthy => __('Unhealthy'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Healthy => 'success',
            self::Unhealthy => 'danger',
        };
    }

    public function getIcon(): string|BackedEnum|null
    {
        return Heroicon::Heart;
    }
}
