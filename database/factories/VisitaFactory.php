<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Visita;
use Faker\Generator as Faker;

$factory->define(Visita::class, function (Faker $faker) {

    return [
        'name' => $faker->text,
        'document' => $faker->text,
        'temperature' => $faker->text,
        'visitDate' => $faker->word,
        'visit-time' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
