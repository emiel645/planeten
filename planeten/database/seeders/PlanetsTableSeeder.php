<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed the solar_systems table first
        DB::table('solar_systems')->insert([
            [
                'name' => 'milkyway',
                'age_in_years' => 500, // Example age
            ],
            [
                'name' => 'env-3',
                'age_in_years' => 450, // Example age
            ],
           
        ]);

        // Now seed the planets table with valid solar_system_id values
        DB::table('planets')->insert([
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System.',
                'size_in_km' => 6779,
                'solar_system_id' => 1, // Assign this planet to a solar system
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
                'size_in_km' => 12104,
                'solar_system_id' => 1, // Assign this planet to a different solar system
            ],
            [
                'name' => 'earth',
                'description' => 'our planet thats were we live and were teh only one',
                'size_in_km' => 13092,
                'solar_system_id' => 1, // Assign this planet to a different solar system
            ],
            [
                'name' => 'chickens',
                'description' => 'chickens is a planet full of chickens in the polo system',
                'size_in_km' => 99999,
                'solar_system_id' => 4, // Assign this planet to a different solar system
            ],
            [
                'name' => 'timo',
                'description' => 'timo planet is based on a boy on earth in europe in the netherlands in noord-holland in heemskerk',
                'size_in_km' => 2,
                'solar_system_id' => 2, // Assign this planet to a different solar system
            ],
            [
                'name' => 'cobalt',
                'description' => 'cobalt is the first planet inthe cosalt universe',
                'size_in_km' => 99998,
                'solar_system_id' => 3, // Assign this planet to a different solar system
            ],
        ]);
    }
}

