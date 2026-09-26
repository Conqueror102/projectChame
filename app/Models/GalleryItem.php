<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property string $title
 * @property string|null $eyebrow
 * @property string|null $caption
 * @property string|null $alt_text
 * @property string $image
 * @property string $image_position
 * @property int $order
 * @property string $layout_span
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable([
    'title',
    'eyebrow',
    'caption',
    'alt_text',
    'image',
    'image_position',
    'order',
    'layout_span',
    'is_active',
])]
class GalleryItem extends Model
{
    use HasFactory;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Scope to active gallery items
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope ordered
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order', 'asc')->orderBy('id', 'asc');
    }

    /**
     * Helper to get image URL
     */
    public function getImageUrlAttribute(): ?string
    {
        if (! $this->image) {
            return null;
        }

        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }

        if (Str::startsWith($this->image, 'resources/')) {
            return Vite::asset($this->image);
        }

        if (Str::startsWith($this->image, ['/storage', 'storage'])) {
            return asset(ltrim($this->image, '/'));
        }

        return asset('storage/'.$this->image);
    }

    /**
     * Format two digit number string (e.g. "01", "02")
     */
    public function getNumberStringAttribute(): string
    {
        return str_pad((string) $this->order, 2, '0', STR_PAD_LEFT);
    }
}
