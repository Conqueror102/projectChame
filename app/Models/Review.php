<?php

namespace App\Models;

use Database\Factories\ReviewFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $author_name
 * @property string|null $role
 * @property string $content
 * @property string|null $initials
 * @property string|null $meta
 * @property int $rating
 * @property int $order
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable([
    'author_name',
    'role',
    'content',
    'initials',
    'meta',
    'rating',
    'order',
    'is_active',
])]
class Review extends Model
{
    /** @use HasFactory<ReviewFactory> */
    use HasFactory;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'rating' => 'integer',
            'order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Scope to active reviews.
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope ordered by sort order.
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order', 'asc')->orderBy('id', 'asc');
    }

    /**
     * Scope search by author, role, or content.
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
            $sub->where('author_name', 'like', "%{$term}%")
                ->orWhere('role', 'like', "%{$term}%")
                ->orWhere('content', 'like', "%{$term}%");
        });
    }

    /**
     * Effective 2-letter initials for avatar badge.
     */
    public function getEffectiveInitialsAttribute(): string
    {
        if (! empty($this->initials)) {
            return strtoupper($this->initials);
        }

        $words = preg_split('/\s+/', trim($this->author_name));
        if (count($words) >= 2) {
            return strtoupper(substr($words[0], 0, 1).substr($words[1], 0, 1));
        }

        return strtoupper(substr($this->author_name, 0, 2));
    }
}
