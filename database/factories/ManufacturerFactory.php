<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Manufacturer;
use Faker\Generator as Faker;

$factory->define(Manufacturer::class, function (Faker $faker) {
    return [
    	'name' => $faker->word." ".$faker->colorName,
    	'description' => $faker->text(100),
    ];
});