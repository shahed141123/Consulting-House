<?php

namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coupon::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => Str::random(10),
            'value' => fake()->randomFloat(2, 1, 100),
            'type' => fake()->randomElement(['fixed', 'percentage']),
            'max_uses' => fake()->numberBetween(1, 50),
            'valid_from' => fake()->dateTime(),
            'valid_until' => fake()->optional()->dateTime(),
            'status' => fake()->randomElement(['active', 'expired', 'used']),
            'description' => fake()->sentence,
        ];
    }
}
