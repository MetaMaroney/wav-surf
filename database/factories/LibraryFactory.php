<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Library>
 */
class LibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['hip-hop beats', 'jazz beats',
                'DnB beats', 'Low-Fi beats']),
            'total_beats' => fake()->numberBetween(1, 100)
        ];
    }
}
