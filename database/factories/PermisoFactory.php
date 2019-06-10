<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Permiso;

$factory->define(Permiso::class, function (Faker $faker) {
    //Faker libreria para llenar datos aleatoriamente a la base de datos
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word
    ];
});
