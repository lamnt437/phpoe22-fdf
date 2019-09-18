<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bill;
use Faker\Generator as Faker;

$factory->define(Bill::class, function (Faker $faker) {
    return [
        'status' => rand(0, 1) == 1,
    ];
});
