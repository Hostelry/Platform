<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use CodingMatters\Account\Entities\Owner;
use Illuminate\Support\Facades\Hash;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'code' => $faker->uuid,
        'username' => $faker->email,
        'password' => Hash::make('secret'),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ];
});
