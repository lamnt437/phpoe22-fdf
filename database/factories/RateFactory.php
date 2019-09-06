<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rate;
use Faker\Generator as Faker;
use App\User;
use App\Product;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        'score' => rand(0, 10),
    ];
});
