<?php

use Faker\Generator as Faker;
use App\Repositories\TaskRepository;

$factory->define(TaskRepository::class, function (Faker $faker) {
    return [
        'project_id' =>  $faker->numberBetween($min = 1, $max = 5000),
        'user_id' =>  $faker->numberBetween($min = 1, $max = 500),
        'description' =>  $faker->text($maxNbChars = 140),
        'status' =>  $faker->numberBetween($min = 0, $max = 1),
        'archive' =>  $faker->biasedNumberBetween($min = 0, $max = 0, $function = 'sqrt'),
        'due_at' =>  $faker->dateTimeBetween($startDate = '-3 years', $endDate = '+5 years', $timezone = null),
    ];
});
