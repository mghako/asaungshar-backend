<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Township;
use Faker\Generator as Faker;

$factory->define(Township::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['San Chaung', 'Ahlone', 'Sule', 'Tarmwe', 'Myay Ni Gone'])
    ];
});
