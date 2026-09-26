<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TeamMember>
 */
class TeamMemberFactory extends Factory
{
    protected $model = TeamMember::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'role' => fake()->jobTitle(),
            'bio' => fake()->paragraph(),
            'image' => null,
            'image_position' => 'center',
            'order' => fake()->numberBetween(1, 20),
            'is_active' => true,
        ];
    }
}
