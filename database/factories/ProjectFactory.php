<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pname' => fake()->unique()->word(),
            'description' => fake()->paragraph(),
            // CHANGE HERE
            'user_id' => fake()->numberBetween(1,2) // rand between 2 users
        ];
    }
}
