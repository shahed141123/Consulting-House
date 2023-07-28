<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use App\Models\FilteringItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FilteringItem>
 */
class FilteringItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FilteringItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = Product::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();

        return [
            'product_id' => fake()->randomElement($products),
            'status' => fake()->randomElement(['active', 'inactive']),
            'sort_order' => fake()->numberBetween(1, 100),
            'icon' => fake()->word(),
            'attribute_name' => fake()->word(),
            'attribute_value' => fake()->word(),
            'price' => fake()->randomFloat(2, 0, 9999),
            'stock_status' => fake()->randomElement(['in_stock', 'out_of_stock']),
            'quantity' => fake()->numberBetween(0, 100),
            'material' => fake()->word(),
            'weight' => fake()->numberBetween(100, 10000) . "g",
            'description' => fake()->text(200),
            'created_by' => fake()->randomElement($users),
            'updated_by' => fake()->randomElement($users),
            'deleted_by' => fake()->randomElement($users)
        ];
    }
}
