<?php

use Faker\Generator as Faker;

$factory->define(App\Books::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'user_id' => 1,
    ];
});
