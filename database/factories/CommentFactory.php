<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Database\Factories\ArticleFactory;


class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_email' => $this->faker->email(),
            'message' => $this->faker->paragraph(),
            'article_id' => Article::factory(),
        ];
    }
}