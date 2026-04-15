<?php

namespace App\Models;

use App\Enums\Currency;
use App\Enums\DonationStatus;
use App\Enums\PaymentGateway;
use App\Enums\PaymentMethod;
use Database\Factories\DonationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    /** @use HasFactory<DonationFactory> */
    use HasFactory;

    use SoftDeletes;

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'status' => DonationStatus::class,
            'payment_gateway' => PaymentGateway::class,
            'payment_method' => PaymentMethod::class,
            'paid_at' => 'datetime',
            'anonymous' => 'boolean',
        ];
    }

    public function donationTarget(): BelongsTo
    {
        return $this->belongsTo(DonationTarget::class);
    }

    public function donationAllocations(): HasMany
    {
        return $this->hasMany(DonationAllocation::class);
    }
}
