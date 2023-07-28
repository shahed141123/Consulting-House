<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Admin;
use App\Models\ShippingAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShippingAddress>
 */
class ShippingAddressFactory extends Factory
{
    protected $model = ShippingAddress::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'address_line1' => fake()->streetAddress,
            'address_line2' => fake()->optional()->secondaryAddress,
            'city' => fake()->city,
            'state' => fake()->state,
            'postal_code' => fake()->postcode,
            'country' => fake()->country,
            'phone' => fake()->optional()->phoneNumber,
            'created_by' => Admin::factory(),
            'updated_by' => Admin::factory(),
            'deleted_by' => Admin::factory()
        ];
    }
}
