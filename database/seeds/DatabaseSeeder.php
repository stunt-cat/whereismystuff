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
    }
}
