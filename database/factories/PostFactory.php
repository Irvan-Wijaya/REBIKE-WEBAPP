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
            'title' => $this->faker->realText($maxNbChars = 100),
            'content' => $this->faker->realText($maxNbChars = 300),
            'slug' => $this->faker->slug(),
            'user_id' => 1,
            'like_count' => 0,
            'dislike_count' => 0,
            'comment_count' => 0,
        ];
    }
}
