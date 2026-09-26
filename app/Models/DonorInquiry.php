<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string $involvement_type
 * @property string|null $pledge_amount
 * @property string $frequency
 * @property string|null $message
 * @property string $status
 * @property string|null $admin_notes
 * @property Carbon|null $contacted_at
 * @property string|null $ip_address
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable([
    'name',
    'email',
    'phone',
    'involvement_type',
    'pledge_amount',
    'frequency',
    'message',
    'status',
    'admin_notes',
    'contacted_at',
    'ip_address',
])]
class DonorInquiry extends Model
{
    use HasFactory;

    public const STATUS_NEW = 'new';

    public const STATUS_CONTACTED = 'contacted';

    public const STATUS_IN_PROGRESS = 'in_progress';

    public const STATUS_PLEDGED = 'pledged';

    public const STATUS_CLOSED = 'closed';

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'contacted_at' => 'datetime',
        ];
    }

    /**
     * Scope to new inquiries
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeNew(Builder $query): Builder
    {
        return $query->where('status', self::STATUS_NEW);
    }

    /**
     * Scope search
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeSearch(Builder $query, ?string $term): Builder
    {
        if (blank($term)) {
            return $query;
        }

        return $query->where(function ($sub) use ($term) {
            $sub->where('name', 'like', "%{$term}%")
                ->orWhere('email', 'like', "%{$term}%")
                ->orWhere('phone', 'like', "%{$term}%")
                ->orWhere('pledge_amount', 'like', "%{$term}%");
        });
    }

    /**
     * Format involvement label
     */
    public function getInvolvementLabelAttribute(): string
    {
        return match ($this->involvement_type) {
            'support_child' => 'Support a Child',
            'partner' => 'Partner with Us',
            'general_donation' => 'Direct Donation / Medical Fund',
            'advocate' => 'Advocate & Awareness',
            default => ucfirst(str_replace('_', ' ', $this->involvement_type)),
        };
    }

    /**
     * Format frequency label
     */
    public function getFrequencyLabelAttribute(): string
    {
        return match ($this->frequency) {
            'monthly' => 'Monthly Recurring',
            'annual' => 'Annual Support',
            'one_time' => 'One-time Pledge',
            default => ucfirst(str_replace('_', ' ', $this->frequency)),
        };
    }

    /**
     * Format status badge color for Flux UI
     */
    public function getStatusColorAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_NEW => 'rose',
            self::STATUS_CONTACTED => 'amber',
            self::STATUS_IN_PROGRESS => 'blue',
            self::STATUS_PLEDGED => 'emerald',
            self::STATUS_CLOSED => 'zinc',
            default => 'zinc',
        };
    }

    /**
     * Format status badge variant for Flux UI
     */
    public function getStatusVariantAttribute(): string
    {
        return $this->getStatusColorAttribute();
    }
}
