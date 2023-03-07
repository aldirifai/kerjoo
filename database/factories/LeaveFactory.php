<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Leave;
use Faker\Generator as Faker;

$factory->define(Leave::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'leave_date' => $faker->dateTimeBetween('-1 years', 'now'),
        'duration' => $faker->numberBetween(1, 8),
        'reason' => $faker->randomElement(['sick', 'vacation', 'business', 'maternity', 'paternity', 'bereavement']),
    ];
});
