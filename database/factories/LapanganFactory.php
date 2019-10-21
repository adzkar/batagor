<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Lapangan;
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

$factory->define(Lapangan::class, function (Faker $faker) {
    return [
        'harga' => random_int(0, 2147483647),
        'detail' => $faker->realText(),
        'gor_id' => random_int(1, 10)
    ];
});
