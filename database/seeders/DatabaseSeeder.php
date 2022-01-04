<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\BlogTag;
use App\Models\Comment;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Article::factory()
             ->count(5)
             ->has(BlogTag::factory(), 'tags')
             ->has(BlogCategory::factory(), 'category')
             ->create();

        Comment::factory()->count(10)->create();
    }
}
