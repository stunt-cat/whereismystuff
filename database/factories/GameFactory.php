<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Game;
use App\Manufacturer;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text(100),
        'when_loaned' => 'Not yet',
        'location' => 'My shelf',
        'manufacturer_id' => Manufacturer::all()->pluck('id')->random(),
    ];
});
