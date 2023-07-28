<?php

namespace Database\Factories;

use App\Models\ProfileType;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfileType>
 */
class ProfileTypeFactory extends Factory
{
    protected $model = ProfileType::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name;
        return [
            'name'        => $name,
            'slug'        => Str::slug($name),
            'image'       => fake()->imageUrl,
            'description' => fake()->paragraph,
            'created_by'  => Auth::id() ?? 1,
            'updated_by'  => Auth::id() ?? 1,
            'deleted_by'  => Auth::id() ?? 1,
            'deleted_at'  => null,
            'created_at'  => fake()->dateTime,
            'updated_at'  => fake()->dateTime,
        ];
    }
}
