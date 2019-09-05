<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->sentence,
        'time' => dateTime($max = 'now', $timezone = null),
        'status' => rand(0, 1) == 1,
    ];
});
