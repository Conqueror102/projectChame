<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        $title = fake()->sentence(4);

        return [
            'title' => $title,
            'slug' => Str::slug($title).'-'.fake()->unique()->randomNumber(4),
            'description' => fake()->paragraph(),
            'event_date' => fake()->dateTimeBetween('now', '+1 month'),
            'location' => fake()->city().', Nigeria',
            'category' => fake()->randomElement(['Awareness Session', 'Family Support Circle', 'Care Clinic']),
            'image' => null,
            'image_position' => 'center',
            'action_label' => 'View event',
            'action_url' => null,
            'is_active' => true,
        ];
    }
}
