<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'value_sale' => $faker->randomFloat(2,1,999),
        'value_cost' => $faker->randomFloat(2,1,999),
        'obs' => $faker->text(),
        'category_id' => $faker->numberBetween(1,15)
    ];
});
