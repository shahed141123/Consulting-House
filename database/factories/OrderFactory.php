<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Rfq;
use App\Models\User;
use App\Models\Order;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'rfq_id' => Rfq::factory(),
            'vendor_id' => null,
            'order_number' => fake()->unique()->numberBetween(100000, 999999),
            'invoice_number' => fake()->unique()->numberBetween(100000, 999999),
            'billing_name' => fake()->name,
            'billing_address_line1' => fake()->streetAddress,
            'billing_address_line2' => fake()->optional()->secondaryAddress,
            'billing_city' => fake()->city,
            'billing_state' => fake()->stateAbbr,
            'billing_postal_code' => fake()->postcode,
            'billing_country' => Country::inRandomOrder()->first()->id,
            'billing_phone' => fake()->phoneNumber,
            'shipping_name' => fake()->name,
            'shipping_address_line1' => fake()->streetAddress,
            'shipping_address_line2' => fake()->optional()->secondaryAddress,
            'shipping_city' => fake()->city,
            'shipping_state' => fake()->stateAbbr,
            'shipping_postal_code' => fake()->postcode,
            'shipping_country' => Country::inRandomOrder()->first()->id,
            'shipping_phone' => fake()->phoneNumber,
            'payment_method_id' => PaymentMethod::factory(),
            'transaction_number' => fake()->optional()->creditCardNumber,
            'total_amount' => fake()->randomFloat(2, 10, 1000),
            'notes' => fake()->optional()->sentence,
            'payment_status' =>  fake()->randomElement(['paid', 'unpaid']),
            'status' => fake()->randomElement(['pending', 'processing', 'shipped', 'delivered', 'cancelled', 'return']),
            'order_date' => fake()->dateTime(),
            'processing_date' => fake()->dateTime(),
            'shipped_date' => fake()->dateTime(),
            'delivered_date' => fake()->dateTime(),
            'return_date' => fake()->dateTime(),
            'return_reason' => fake()->optional()->sentence,
            'return_amount' => fake()->randomFloat(2, 1, 1000),
            'created_by' => User::factory(),
            'updated_by' => User::factory(),
            'deleted_by' => User::factory(),
        ];
    }
}
