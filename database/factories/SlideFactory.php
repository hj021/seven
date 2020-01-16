<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Slide::class, function (Faker $faker) {
    return [
        'img' => 'slide'.random_int(1,2).'.jpg',
        'description' => $faker->realText('100'),
        'product_id' => random_int(1,10),
    ];
});
