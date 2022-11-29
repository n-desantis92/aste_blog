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

            'post_title' => fake()->sentence(),
            'post_subtitle' => fake()->realtext(20),
            'post_description' => fake()->text(),
            'post_img' => fake()->imageUrl(640,480),
            'post_video' => 'titolo bellissimo',
            'post_date' => fake()->date(),
            'published' => 1,

        ];
    }
}
