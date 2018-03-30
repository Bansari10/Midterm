<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'model' => $faker->randomElement($array = array ('SUV','Sedan','XUV')),
        'year' => $faker->year($max = 'now'),

    ];
});
