<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Rating;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'rate' => random_int(0,5),
        'komentar' => $faker->sentence(),
        'user_id' => random_int(1, 10),
        'gor_id' => random_int(0, 10)
    ];
});
