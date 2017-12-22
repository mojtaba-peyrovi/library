<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'author' => $faker->name(),
        'publisher' => $faker->name(),
        'date_published' => $faker->dateTime(),
        'about' => $faker->paragraph(),
        'language' => 'english',
        'country_published' => $faker->country(),
        'category' =>$faker->name()
    ];
});
