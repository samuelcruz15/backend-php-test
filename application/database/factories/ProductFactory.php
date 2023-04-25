<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'code' => fake()->unique()->randomNumber(4),
            'name' => fake()->name(),
            'brand' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2,0,500),
            'available_quantity' => fake()->randomDigit(),
            'status' => 'A',
        ];
    }
}
