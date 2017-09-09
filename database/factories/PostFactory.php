<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {

    $date = $faker->dateTimeThisMonth;

    return [
        'title'=>$faker->sentence(),
        'content'=>$faker->paragraph(),
        'created_at'=>$date,
        'updated_at'=>$date,
    ];
});
