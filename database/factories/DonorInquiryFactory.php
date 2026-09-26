<?php

namespace Database\Factories;

use App\Models\DonorInquiry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DonorInquiry>
 */
class DonorInquiryFactory extends Factory
{
    protected $model = DonorInquiry::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'involvement_type' => fake()->randomElement(['support_child', 'general_donation', 'partner', 'advocate']),
            'pledge_amount' => '₦'.fake()->numberBetween(10000, 500000),
            'frequency' => fake()->randomElement(['monthly', 'one_time', 'annual']),
            'message' => fake()->sentence(),
            'status' => 'new',
            'admin_notes' => null,
            'contacted_at' => null,
            'ip_address' => '127.0.0.1',
        ];
    }
}
