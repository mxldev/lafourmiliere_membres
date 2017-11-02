<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role' => $faker->randomElement($array = array ('admin', 'accountant', 'true')) ,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),

        'firstname' => $faker->firstName,
        'gender' => $faker->randomElement($array = array ('male', 'female')) ,
        'member' => $faker->randomElement($array = array (1, 0)) ,
        'phonenumber' => $faker->e164PhoneNumber,

        'address' => $faker->streetAddress,
        'addresscomp' => $faker->secondaryAddress,
        'postcode' => $faker->randomDigit,
        'city' => $faker->city,
        'addresscomp' => $faker->secondaryAddress,
    ];
});
