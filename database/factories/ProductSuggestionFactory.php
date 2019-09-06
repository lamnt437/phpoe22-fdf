<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductSuggestion;
use Faker\Generator as Faker;

$factory->define(ProductSuggestion::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'image' => 'https://newsroom.unsw.edu.au/sites/default/files/styles/full_width__2x/public/thumbnails/image/5_junk_food_shutterstock_1.jpg?itok=ob90mjuR',
        'status' => rand(0, 1) == 1,
    ];
});
