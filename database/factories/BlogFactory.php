<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'contenido' => $faker->paragraph,
        'user_id' => function() {
                    return factory(App\User::class)->create()->id;
        }
    ];
});
