<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMethod>
 */
class PaymentMethodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PaymentMethod::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'method' => fake()->word,
            'account_number' => fake()->bankAccountNumber,
            'account_holder_name' => fake()->name,
            'account_address' => fake()->address,
            'bank_name' => fake()->company,
            'bank_branch_name' => fake()->word . ' Branch',
            'bank_routing' => fake()->iban('GB'),
            'status' => fake()->randomElement(['active', 'inactive']),
            'image' => fake()->imageUrl(),
            'api_key' => Str::random(10),
            'minimum_amount' => fake()->randomFloat(2, 0, 1000),
            'maximum_amount' => fake()->randomFloat(2, 1000, 10000),
            'description' => fake()->text,
            'additional_fields' => json_encode([
                'field_1' => fake()->word,
                'field_2' => fake()->word,
                'field_3' => fake()->word,
            ]),
        ];
    }
}
