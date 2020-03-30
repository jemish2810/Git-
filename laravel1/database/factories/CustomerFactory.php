<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);

    return [
        
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->phoneNumber,
        'gender' => $gender,
        
    ];
});
