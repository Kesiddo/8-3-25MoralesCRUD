<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'year' => $this->faker->year,
            'age' => $this->faker->numberBetween(18, 60),
            'course' => $this->faker->word,
            'body' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
