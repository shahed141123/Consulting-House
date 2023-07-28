<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use App\Models\PreOrder;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<PreOrder>
 */
class PreOrderFactory extends Factory
{
    protected $model = PreOrder::class;
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
            'order_date' => fake()->date(),
            'order_time' => fake()->time(),
            'quantity' => fake()->numberBetween(1, 10),
            'notes' => fake()->text(),
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
        ];
    }
}
