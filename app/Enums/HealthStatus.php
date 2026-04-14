<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum HealthStatus: string implements HasColor, HasIcon, HasLabel
{
    case Healthy = 'healthy';
    case ChronicIllness = 'chronic_illness';
    case Disabled = 'disabled';
    case Critical = 'critical';
    case Other = 'other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Healthy => __('Healthy'),
            self::ChronicIllness => __('Chronic Illness'),
            self::Disabled => __('Disabled'),
            self::Critical => __('Critical'),
            self::Other => __('Other'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Healthy => 'success',
            self::ChronicIllness => 'warning',
            self::Disabled => 'info',
            self::Critical => 'danger',
            self::Other => 'gray',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::Heart;
    }
}
