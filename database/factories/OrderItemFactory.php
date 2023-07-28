<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->randomFloat(2, 10, 1000);
        $quantity = $this->faker->numberBetween(1, 5);
        return [
            'order_id' => Order::factory(),
            'product_id' => Product::factory(),
            'color' => $this->faker->optional()->colorName,
            'size' => $this->faker->optional()->randomElement(['S', 'M', 'L', 'XL']),
            'price' => $price,
            'quantity' => $quantity,
            'created_by' => User::factory(),
            'updated_by' => User::factory(),
            'deleted_by' => User::factory(),
        ];
    }
}
