<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum DocumentCategory: string implements HasColor, HasIcon, HasLabel
{
    case Identity = 'identity';
    case Housing = 'housing';
    case Financial = 'financial';
    case Medical = 'medical';
    case Legal = 'legal';
    case SocialResearch = 'social_research';
    case Committee = 'committee';
    case Other = 'other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Identity => __('Identity'),
            self::Housing => __('Housing'),
            self::Financial => __('Financial'),
            self::Medical => __('Medical'),
            self::Legal => __('Legal'),
            self::SocialResearch => __('Social Research'),
            self::Committee => __('Committee'),
            self::Other => __('Other'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Identity => 'info',
            self::Housing => 'warning',
            self::Financial => 'success',
            self::Medical => 'danger',
            self::Legal => 'primary',
            self::SocialResearch => 'gray',
            self::Committee => 'primary',
            self::Other => 'gray',
        };
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::Folder;
    }
}
