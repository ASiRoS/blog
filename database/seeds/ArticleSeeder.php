<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Comment;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class, 20)->create()->each(function (Article $article) {
            $article->comments()->saveMany(factory(Comment::class, 15)->make());
        });
    }
}
