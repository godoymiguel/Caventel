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

$factory->define(Caventel\User::class, function (Faker\Generator $faker) {
    return [
        'ci' => $faker->randomNumber(),
        'name' => $faker->name,
        'last_name'=> $faker->lastName,
        'email'=> $faker->email,
        'password' => bcrypt('1234'),
        'type' => $faker->randomElement(['user','secretary','admin']),
        'remember_token' => str_random(10)

    ];
});

$factory->define(Caventel\News::class, function (Faker\Generator $faker) {
    return [
        'user_id' => '1',
        'title' => $faker->company,
        'body'=> $faker->realText(5000,5),
        'img'=> 'ingsistemas.jpg'

    ];
});

$factory->define(Caventel\PayRoll::class, function (Faker\Generator $faker) {
    return [
        'user_ci' => $faker->randomNumber(),
        'salary' => 23000.00

    ];
});