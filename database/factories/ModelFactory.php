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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'picture_url' => 'images/author-avatar.png',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'user_id' => rand(1,10),
        'title' => $faker->sentence,
        'slug' => $faker->sentence,
        'abstract' => $faker->paragraph,
        'body' => $faker->paragraph,
        'large_img_url' => 'images/posts/1/large-post01.jpg',
        'med_img_url' => 'images/side-post01.jpg',
        'small_img_url' => 'images/small-side-post01.jpg',
    ];
});