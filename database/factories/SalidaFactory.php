<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Salida;
use Faker\Generator as Faker;

$factory->define(Salida::class, function (Faker $faker) {

    return [
        'name' => $faker->text,
        'document' => $faker->text,
        'temperature' => $faker->text,
        'visitDate' => $faker->word,
        'visitTime' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
