<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['FISICA','JURIDICA']),
        'cpf_cnpj' => $faker->numerify(111111111,999999999),
        'name' => $faker->name(),
        'name_fantasy' => $faker->company,
        'email' => $faker->email,
        'address' => $faker->address,
        'number' => $faker->numberBetween(0,1000),
        'city' => $faker->city,
        'uf' => $faker->randomElement(['MG','SP','RJ','ES','PE','MS']),
        'obs' => $faker->text
    ];
});
