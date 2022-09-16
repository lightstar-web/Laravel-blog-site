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
    public function definition()
    {
        return [
            'title' => fake()->unique()->sentence(),
            'excerpt' => fake()->realText(50),
            'body' => fake()->paragraph(6),
            'image_path' => fake()->imageUrl(640, 480),
            'is_published' => fake()->boolean(),
            'min_to_read' => fake()->numberBetween(1, 15),
        ];
    }
}
