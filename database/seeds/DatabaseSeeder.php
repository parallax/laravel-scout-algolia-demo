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

            $latitude = (float) 53.7957925;
            $longitude = (float) -1.5385938;
            $radius = 1;

            $lng_min = $longitude - $radius / abs(cos(deg2rad($latitude)) * 69);
            $lng_max = $longitude + $radius / abs(cos(deg2rad($latitude)) * 69);
            $lat_min = $latitude - ($radius / 69);
            $lat_max = $latitude + ($radius / 69);

            $randomLatitude = rand($lat_min * 10000000, $lat_max * 10000000) / 10000000;
            $randomLongitude = rand($lng_min * 10000000, $lng_max * 10000000) / 10000000;


            $location = Location::create([
                'name' => $faker->company,
                'description' => $faker->sentence,
                'address' => $faker->address,
                'latitude' => $randomLatitude,
                'longitude' => $randomLongitude
            ]);

            Manager::create([
                'name' => $faker->name,
                'location_id' => $location->id
            ]);
        }
    }
}
