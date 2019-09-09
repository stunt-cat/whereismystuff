<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'title' => implode(" ", $faker->words(2)),
        'description' => $faker->sentence,
        'when_loaned' => $faker->randomElement(['yesterday', 'today', 'a looooong time ago']),
        'location' => $faker->randomElement(['Ed\'s shelf', 'Justen\'s house', 'work', 'LOST, OMG']),
    ];
});
