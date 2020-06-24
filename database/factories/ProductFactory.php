<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(6),
        'description' => $faker->sentence(10),
        'price' => $faker->numberBetween(100, 5000),
        'shops_id' => 1

    ];
});
