<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->jobTitle();
        $slug = $this->faker->slug();
        $tag1 = $this->faker->randomElement(['IT', 'School', 'Tech']);
        $tag2 = $this->faker->randomElement(['IT', 'School', 'Tech']);

        return [
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraph(),
            'tags' => json_encode([$tag1, $tag2])
        ];
    }
}
