<?php

namespace Database\Factories;

use App\Models\Rfq;
use App\Models\Vendor;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rfq>
 */
class RfqFactory extends Factory
{
    protected $model = Rfq::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rfq_code'            => fake()->unique()->word(),
            'product_id'          => Product::factory(),
            'vendor_id'           => null,
            'custom_product_name' => fake()->optional()->word(),
            'quantity'            => fake()->numberBetween(1, 10),
            'price'               => fake()->randomFloat(2, 1, 100),
            'tax'                 => fake()->randomFloat(2, 0, 10),
            'vat'                 => fake()->randomFloat(2, 0, 10),
            'delivery_address'    => fake()->optional()->address(),
            'user_name'           => fake()->name(),
            'user_email'          => fake()->email(),
            'user_phone'          => fake()->phoneNumber(),
            'rfq_status'          => fake()->randomElement(['rfq', 'deal', 'order', 'delivered']),
            'status'              => fake()->randomElement(['pending', 'replied', 'closed', 'rejected']),
            'notes'               => fake()->optional()->text(),
            'product_description' => fake()->optional()->text(),
            'created_by'          => null,
            'updated_by'          => null,
            'deleted_by'          => null,
            'creation_date'       => now(),
            'close_date'          => fake()->optional()->date(),
        ];;
    }
}
