<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Food::class, function (Faker $faker) {
    return [
        'name' => $faker->food(),
        'taste' => $faker->randomElement(['normal','good','pleasent','awesome','perfect'])

    ];
});
