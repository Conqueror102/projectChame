<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'user_id' => User::factory(),
            'title' => $title,
            'slug' => Str::slug($title).'-'.fake()->unique()->randomNumber(4),
            'excerpt' => fake()->paragraph(),
            'content' => '<p>'.fake()->paragraphs(3, true).'</p>',
            'featured_image' => null,
            'status' => 'published',
            'published_at' => now(),
            'read_time_minutes' => fake()->numberBetween(2, 10),
        ];
    }

    public function draft(): static
    {
        return $this->state(fn () => [
            'status' => 'draft',
            'published_at' => null,
        ]);
    }
}
