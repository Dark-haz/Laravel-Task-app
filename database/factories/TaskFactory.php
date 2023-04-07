<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tname' => fake()->unique()->sentence(),
            'description' => fake()->paragraph(),
            'completed' => fake()->randomElement([0,1]),
            // CHANGE HERE
            'project_id' => fake()->numberBetween(1,6) // rand between 6 projects
        ];
    }
}
