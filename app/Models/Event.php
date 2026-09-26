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
 * @property string $slug
 * @property string|null $description
 * @property Carbon $event_date
 * @property string $location
 * @property string|null $category
 * @property string|null $image
 * @property string|null $image_position
 * @property string|null $action_url
 * @property string $action_label
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable([
    'title',
    'slug',
    'description',
    'event_date',
    'location',
    'category',
    'image',
    'image_position',
    'action_url',
    'action_label',
    'is_active',
])]
class Event extends Model
{
    use HasFactory;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'event_date' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Scope to active events
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to upcoming events (from today onwards)
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeUpcoming(Builder $query): Builder
    {
        return $query->where('event_date', '>=', now()->startOfDay())
            ->orderBy('event_date', 'asc');
    }

    /**
     * Scope to past events
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopePast(Builder $query): Builder
    {
        return $query->where('event_date', '<', now()->startOfDay())
            ->orderBy('event_date', 'desc');
    }

    /**
     * Scope to search events by title, location, or category
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
            $sub->where('title', 'like', "%{$term}%")
                ->orWhere('location', 'like', "%{$term}%")
                ->orWhere('category', 'like', "%{$term}%");
        });
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
     * Formatted time label (e.g. "10:00 AM")
     */
    public function getFormattedTimeAttribute(): string
    {
        return $this->event_date->format('g:i A');
    }

    /**
     * Formatted date label (e.g. "14 Sep, 2026")
     */
    public function getFormattedDateAttribute(): string
    {
        return $this->event_date->format('d M, Y');
    }
}
