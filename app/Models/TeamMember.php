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
 * @property string $name
 * @property string|null $slug
 * @property string $role
 * @property string|null $specialty
 * @property string|null $email
 * @property string|null $linkedin_url
 * @property string|null $twitter_url
 * @property string|null $bio
 * @property string|null $quote
 * @property string|null $image
 * @property string $image_position
 * @property int $order
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable([
    'name',
    'slug',
    'role',
    'specialty',
    'email',
    'linkedin_url',
    'twitter_url',
    'bio',
    'quote',
    'image',
    'image_position',
    'order',
    'is_active',
])]
class TeamMember extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        static::creating(function (TeamMember $member) {
            if (blank($member->slug)) {
                $base = Str::slug($member->name);
                $slug = $base;
                $i = 1;
                while (static::where('slug', $slug)->exists()) {
                    $slug = "{$base}-{$i}";
                    $i++;
                }
                $member->slug = $slug;
            }
        });

        static::updating(function (TeamMember $member) {
            if (blank($member->slug)) {
                $base = Str::slug($member->name);
                $slug = $base;
                $i = 1;
                while (static::where('slug', $slug)->where('id', '!=', $member->id)->exists()) {
                    $slug = "{$base}-{$i}";
                    $i++;
                }
                $member->slug = $slug;
            }
        });
    }

    /**
     * Use slug for route-model binding
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

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
     * Scope to active team members
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope ordered by sort order
     *
     * @param  Builder<$this>  $query
     * @return Builder<$this>
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order', 'asc')->orderBy('id', 'asc');
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
                ->orWhere('role', 'like', "%{$term}%")
                ->orWhere('specialty', 'like', "%{$term}%")
                ->orWhere('bio', 'like', "%{$term}%");
        });
    }

    /**
     * Image URL helper
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
     * Initials helper
     */
    public function getInitialsAttribute(): string
    {
        return collect(explode(' ', $this->name))
            ->map(fn ($part) => mb_substr($part, 0, 1))
            ->take(2)
            ->implode('');
    }

    /**
     * Dedicated Profile URL helper
     */
    public function getProfileUrlAttribute(): string
    {
        return route('team.show', $this->slug ?: $this->id);
    }
}
