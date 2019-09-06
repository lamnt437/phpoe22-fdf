<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => mt_rand(),
        'description' => $faker->sentence,
        'quantity' => mt_rand(),
        'sale' => mt_rand(),
    ];
});
