<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomFloat(2, 50000, 150000),
            'location' => fake()->city(),
        ];
    }

    public function afterCreating()
    {
        return $this->afterCreating(function (Job $job) {
            // Perform any additional actions after creating a Job instance
            // For example, you can create related models or perform other tasks

        });
    }
}
