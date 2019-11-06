<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Manufacturer::class)->create([
        	'name' => 'Days of Wonder',
        	'description' => 'Family friendly classics',
        ]);
        factory(App\Manufacturer::class)->create([
        	'name' => 'Fantasy Flight Games',
        	'description' => 'Epic production values',
        ]);
        factory(App\Manufacturer::class)->create([
        	'name' => 'Ravensburger',
        	'description' => 'Old School',
        ]);
        factory(App\Game::class)->create([
        	'title' => 'Battlelore',
        	'description' => 'Miniatures tabletop warfare without all the hassle.',
        	'manufacturer_id' => App\Manufacturer::where('name', '=', 'Days of Wonder')->first(),
		]);
		factory(App\Game::class)->create([
        	'title' => 'Epic Battlelore',
        	'description' => 'Twice the fun of Battlelore!',
        	'manufacturer_id' => App\Manufacturer::where('name', '=', 'Days of Wonder')->first(),
		]);
		factory(App\Game::class)->create([
        	'title' => 'Android Netrunner',
        	'description' => 'Glorious asymmetrical two player card game. One of the best games ever made.',
        	'manufacturer_id' => App\Manufacturer::where('name', '=', 'Fantasy Flight Games')->first(),
		]);
		factory(App\Game::class)->create([
        	'title' => 'Enchanted Forest',
        	'description' => 'Lovely memory game for smaller people.',
        	'manufacturer_id' => App\Manufacturer::where('name', '=', 'Ravensburger')->first(),
		]);
    }
}
