<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\BlogTag;
use App\Models\Comment;
use App\Models\BlogCategory;
use App\Models\User;
use Database\Factories\BlogCategoryFactory;
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

        User::factory()
            ->count(7)
            ->create();

        BlogCategory::factory()
            ->count(3)
            ->create();


         Article::factory()
             ->count(10)
             ->has(BlogTag::factory(), 'tags')
             ->create();

        Comment::factory()
        ->count(30)
        ->create();
    }
}
