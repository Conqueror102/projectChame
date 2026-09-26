<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();

        return [
            'author_name' => $name,
            'role' => fake()->randomElement(['A Project Cham family', 'Supported Caregiver', 'Pediatric Patient Parent', 'Oncology Care Partner']),
            'content' => fake()->paragraph(2),
            'initials' => strtoupper(substr($name, 0, 1).substr(fake()->lastName(), 0, 1)),
            'meta' => 'Identity protected',
            'rating' => 5,
            'order' => fake()->numberBetween(1, 10),
            'is_active' => true,
        ];
    }
}
