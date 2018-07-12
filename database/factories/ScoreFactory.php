<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Score::class, function (Faker $faker) {
    return [
        'game' => $faker->company,
        'points' => $faker->numberBetween(50, 1000),
        'date' => $faker->dateTimeThisMonth(),
    ];
});
