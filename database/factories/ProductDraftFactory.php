<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use App\Models\ProductDraft;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductDraft>
 */
class ProductDraftFactory extends Factory
{
    protected $model = ProductDraft::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'product_id' => Product::factory(),
            'quantity' => fake()->numberBetween(1, 10),
            'created_by' => Admin::factory(),
            'updated_by' => Admin::factory(),
            'deleted_by' => Admin::factory()
        ];
    }
}
