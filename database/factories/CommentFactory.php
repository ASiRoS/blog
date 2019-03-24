<?php

use Faker\Generator as Faker;
use App\Comment;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->text,
        'user_id' => factory(User::class)->create()->id
    ];
});
