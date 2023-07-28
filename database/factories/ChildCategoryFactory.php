<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use App\Models\ChildCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChildCategory>
 */
class ChildCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChildCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name;

        return [
            'category_id'     => Category::inRandomOrder()->first()->id,
            'sub_category_id' => SubCategory::inRandomOrder()->first()->id,
            'name'            => $name,
            'slug'            => Str::slug($name),
            'icon'           => fake()->imageUrl,
            'image'           => fake()->imageUrl,
            'description'     => fake()->paragraph,
            'created_by'      => Auth::id() ?? 1,
            'updated_by'      => Auth::id() ?? 1,
            'deleted_by'      => Auth::id() ?? 1,
            'deleted_at'      => null,
            'created_at'      => fake()->dateTime,
            'updated_at'      => fake()->dateTime,
        ];
    }
}
