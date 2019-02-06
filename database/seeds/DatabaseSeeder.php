<?php

use App\Location;
use App\Manager;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $location = Location::create([
                'name' => $faker->company,
                'description' => $faker->sentence,
                'address' => $faker->address,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude
            ]);

            Manager::create([
                'name' => $faker->name,
                'location_id' => $location->id
            ]);
        }
    }
}
