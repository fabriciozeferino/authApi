<?php

use Faker\Generator as Faker;


$factory->define(App\Repositories\ProjectRepository::class, function (Faker $faker) {
    return [

        'user_id' =>  $faker->numberBetween($min = 1, $max = 500),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text($maxNbChars = 140),
        'archive' => 1,

    ];
});
