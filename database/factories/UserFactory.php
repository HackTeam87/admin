<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
//        'slug' => str_slug($faker->sentence()),
        'video' => $faker->sentence(),
        'text' => $faker->paragraph(20),
        'post_thumbnail' => 'http://loremflickr.com/400/300?random='.rand(1, 100),
        'category_id' => $faker->numberBetween(1, 3),
        'preview_source' => $faker->sentence(),
        'preview_rendered' => $faker->sentence(),

    ];

});

