<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    return [
        'name'=>$this->faker->word,
        'description'=>$this->faker->word,
        'quantity'=>rand(5, 100),
        'price'=>rand(50, 300),
    ];
});
