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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => "Paulo",
        'email' => "pcego36@gmail.com",
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'titulo' => $faker->sentence,
        'conteudo' => $faker->paragraph,
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->word,
    ];
});
