<?php

use Faker\Generator as Faker;
use App\Article;
use App\User;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name'        => $faker->text,
        'description' => $faker->paragraph,
        'user_id'     => factory(User::class)->create()->id
    ];
});
