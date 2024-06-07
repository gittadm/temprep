<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'model' => fake()->word,
            'mark' => fake()->word,
            'vin' => fake()->sha1,
            'color' => fake()->colorName,
            'length' => 1000 * fake()->numberBetween(10, 250),
            'description' => fake()->realText,
            'year' => fake()->year,
        ];
    }
}
