<?php

use App\User;
use App\Book;
use App\Pop;
//use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'verified' => $verified = $faker->randomElement([User::VERIFIED_USER, User::UNVERIFIED_USER]),
        'verification_token' => $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
        'admin' => $verified = $faker->randomElement([User::ADMIN_USER, User::REGULAR_USER]),
    ];
});

$factory->define(Book::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'author' => $faker->name,
        'isbn' => $faker->numberBetween(1, 10)
    ];
});

$factory->define(Pop::class, function (Faker\Generator $faker) {
    return [
        'image' => $faker->randomElement(['1.jpg', '2.jpg', '3.jpg' ]),
        'book_id' => $faker->numberBetween(1, 10),
        'user_id' => $faker->numberBetween(1, 10)
    ];
});

