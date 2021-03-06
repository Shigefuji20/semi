<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Venue;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Venue::class, function (Faker $faker) {
    return [
        'lname' => $faker->lastName,
        'fname' => $faker->firstName,
        'address' => $faker->address,
        'capacity' => $faker->capacity,
        'price' => $faker->price,
    ];
});
