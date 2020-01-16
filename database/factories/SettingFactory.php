<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Setting::class, function (Faker $faker) {
    return [
        'main' => [
            'img' => 'logo.png',
            'aboutUs' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias consequatur, dignissimos dolorum ea eaque, illum impedit iusto nihil porro provident quae quia quidem quis reiciendis sequi ullam ut voluptate?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias consequatur, dignissimos dolorum ea eaque, illum impedit iusto nihil porro provident quae quia quidem quis reiciendis sequi ullam ut voluptate?',
            'telegram' => 'https:/t.me/salam',
            'instagram' => 'https:/instagram.com/salam',
            'name' => 'بوم نقش پرداز',
        ]
    ];
});
