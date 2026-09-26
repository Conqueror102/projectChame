<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property string|null $excerpt
 * @property string $content
 * @property string|null $featured_image
 * @property string $status
 * @property Carbon|null $published_at
 * @property int $read_time_minutes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read User $user
 */
#[Fillable([
    'user_id',
    'title',
    'slug',
    'excerpt',
    'content',
    'featured_image',
    'status',
    'published_at',
    'read_time_minutes',
])]
class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'read_time_minutes' => 'integer',
        ];
    }

    /**
     * Scope to only published posts that are scheduled on or before now.
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Scope to search posts by title or excerpt
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
                ->orWhere('excerpt', 'like', "%{$term}%");
        });
    }

    /**
     * The author of the post.
     *
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Determine if the post is currently published.
     */
    public function isPublished(): bool
    {
        return $this->status === 'published' && $this->published_at !== null && $this->published_at->isPast();
    }

    /**
     * Get image URL (handles both storage paths and Vite assets)
     */
    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (! $this->featured_image) {
            return null;
        }

        if (Str::startsWith($this->featured_image, ['http://', 'https://'])) {
            return $this->featured_image;
        }

        if (Str::startsWith($this->featured_image, 'resources/')) {
            return Vite::asset($this->featured_image);
        }

        if (Str::startsWith($this->featured_image, ['/storage', 'storage'])) {
            return asset(ltrim($this->featured_image, '/'));
        }

        return asset('storage/'.$this->featured_image);
    }
}
