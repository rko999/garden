<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Request;
use Faker\Generator as Faker;

$factory->define(App\Models\Request::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(mt_rand(3, 10)),
        'demand' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    ];
});
