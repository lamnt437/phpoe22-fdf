<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\ViewHistory;

$factory->define(ViewHistory::class, function (Faker $faker) {
    return [
        'time' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
