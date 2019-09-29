<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'id' => $faker->uuid,
      'title' => $faker->text($maxNbChars = 250),
      'image' => $faker->imageUrl(),
      'text' => $faker->realText($faker->numberBetween(10,2000)),
      'user_id' => 1,
    ];
});
