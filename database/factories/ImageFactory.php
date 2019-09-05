<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'name' => 'https://www.simplyrecipes.com/wp-content/uploads/2019/04/Beef-Pho-LEAD-3-600x840.jpg',
    ];
});
