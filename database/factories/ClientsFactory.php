<?php

use Faker\Generator as Faker;

$factory->define(App\Clients::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'birthday' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')
            ->format('Y-m-d'),
    ];
});
