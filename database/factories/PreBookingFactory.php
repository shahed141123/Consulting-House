<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use App\Models\PreBooking;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PreBooking>
 */
class PreBookingFactory extends Factory
{
    protected $model = PreBooking::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'product_id' => function () {
                return Product::factory()->create()->id;
            },
            'vendor_id' => null,
            'product_name' => fake()->sentence,
            'booking_date' => fake()->dateTimeBetween('+1 day', '+1 month'),
            'booking_time' => fake()->time(),
            'quantity' => fake()->numberBetween(1, 10),
            'notes' => fake()->paragraph,
            'confirmed' => fake()->boolean,
            'paid' => fake()->boolean,
            'total_amount' => fake()->randomFloat(2, 10, 1000),
            'payment_method_id' => function () {
                return PaymentMethod::factory()->create()->id;
            },
            'status' => fake()->randomElement(['pending', 'approved', 'rejected']),
            'created_by' => function () {
                return User::factory()->create()->id;
            },
            'updated_by' => function () {
                return User::factory()->create()->id;
            },
            'deleted_by' => null,
            'deleted_at' => null,
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
