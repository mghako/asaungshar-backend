<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hostel;
use Faker\Generator as Faker;

$factory->define(Hostel::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->company,
        'number_of_room' => $faker->numberBetween(1,6),
        'number_of_person' => $faker->numberBetween(1,6),
        'monthly_fee' => 50000,
        'address' => $faker->unique()->address,
        'township_id' => factory(App\Township::class)
    ];
});
