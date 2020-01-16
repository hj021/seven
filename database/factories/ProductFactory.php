<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'color' => $faker->colorName,
        'price' => $faker->numberBetween(1,50),
        'size' => '25 * 25 cm',
        'artist' => 'استاد ایرانپور',
        'pics' => [
            random_int(1,4) . '.jpg',
            random_int(1,4) . '.jpg',
            random_int(1,4) . '.jpg',
            random_int(1,4) . '.jpg',
        ],
        'category_id' => random_int(1,4),
        'available' => $faker->numberBetween(0,1),
        'count' => 10,
        'description' => $faker->text(100),
    ];
});
