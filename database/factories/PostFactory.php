<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    return [
        'category_id' => $faker->numberBetween(1, 4),
        'title' => $title,
        'slug' => Str::slug($title, '-'),
        'body' => $faker->realText($faker->numberBetween(100,1000))
    ];
});
