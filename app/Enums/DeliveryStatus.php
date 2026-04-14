<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

enum DeliveryStatus: string implements HasColor, HasIcon, HasLabel
{
    case Pending = 'pending';
    case Delivered = 'delivered';
    case PartiallyDelivered = 'partially_delivered';
    case Failed = 'failed';
    case Canceled = 'canceled';
    case Returned = 'returned';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Pending => __('Pending'),
            self::Delivered => __('Delivered'),
            self::PartiallyDelivered => __('Partially Delivered'),
            self::Failed => __('Failed'),
            self::Canceled => __('Canceled'),
            self::Returned => __('Returned'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::Delivered => 'success',
            self::PartiallyDelivered => 'info',
            self::Failed, self::Canceled => 'danger',
            self::Returned => 'gray',
        };
    }

    public function getIcon(): string | BackedEnum | null
    {
        return Heroicon::Truck;
    }
}
