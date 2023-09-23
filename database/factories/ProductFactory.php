<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => fake()->word(),
            'description'   => fake()->text,
            'parameters'    => null,
            'price'         => fake()->randomNumber(4),
            'img'           => Str::random(20),
            'quantity'      => fake()->randomNumber(2),
            'category_id'   => fake()->unique()->numberBetween(Category::first()->id, Category::all()->last()->id)
        ];
    }
}
