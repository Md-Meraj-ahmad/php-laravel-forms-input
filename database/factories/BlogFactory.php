<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence, // Generate a random sentence for the title
            'content' => $this->faker->paragraph, // Generate a random paragraph for content
            'slug' => $this->faker->slug, // Generate a random slug
        ];
    }
}
