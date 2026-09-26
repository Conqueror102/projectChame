<?php

namespace Database\Factories;

use App\Models\GalleryItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GalleryItem>
 */
class GalleryItemFactory extends Factory
{
    protected $model = GalleryItem::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'eyebrow' => fake()->randomElement(['Child & family support', 'Awareness & advocacy', 'Access to care', 'Family support']),
            'caption' => fake()->paragraph(),
            'alt_text' => fake()->sentence(6),
            'image' => 'resources/images/marketing/project-cham-impact-awareness.png',
            'image_position' => 'center 50%',
            'order' => fake()->numberBetween(1, 10),
            'layout_span' => 'standard',
            'is_active' => true,
        ];
    }
}
