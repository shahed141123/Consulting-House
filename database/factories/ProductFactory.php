<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isFeatured = fake()->randomElement([false, true]);
        $isTodayDeal = fake()->randomElement([false, true]);
        $discount = $isTodayDeal ? fake()->randomFloat(2, 0, 99) : null;

        return [
            'name' => fake()->word,
            'slug' => fake()->unique()->slug,
            'short_description' => fake()->text,
            'description' => fake()->paragraph,
            'specification' => fake()->paragraph,
            'price' => fake()->randomFloat(2, 0, 9999),
            'quantity' => fake()->numberBetween(0, 100),
            'sku' => fake()->unique()->numerify('SKU#####'),
            'manufacturer_code' => fake()->unique()->numerify('MC#####'),
            'product_code' => fake()->unique()->numerify('PC#####'),
            'tags' => json_encode([fake()->word, fake()->word]),
            'size' => json_encode([fake()->randomNumber(2), fake()->randomNumber(2)]),
            'color' => json_encode([fake()->colorName, fake()->colorName]),
            'warranty' => fake()->word,
            'is_discount' => $isTodayDeal ? $discount : 0,
            'brand_id' => null,
            'category_id'     => Category::inRandomOrder()->first()->id,
            'sub_category_id' => null,
            'child_category_id' => null,
            'vendor_id' => null,
            'supplier_id' => null,
            'warehouse_id' => null,
            'pickup_point_id' => null,
            'payment_method_id' => null,
            'is_featured' => $isFeatured ? 'true' : 'false',
            'is_status' => fake()->randomElement(['draft', 'pending', 'active', 'inactive']),
            'type' => fake()->randomElement(['new', 'refurbished', 'used']),
            'is_today_deal' => $isTodayDeal ? 'true' : 'false',
            'deal' => $discount,
            'image' => null,
            'pdf' => null,
            'supplier_price' => fake()->randomFloat(2, 0, 9999),
            'supplier_delivery_date' => fake()->optional(0.5)->date(),
            'created_by' => null,
            'updated_by' => null,
            'deleted_by' => null,
            'deleted_at' => null,
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
