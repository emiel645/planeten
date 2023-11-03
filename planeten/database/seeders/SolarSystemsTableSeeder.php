<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolarSystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('solar_systems')->insert([
            ['name' => 'milkyway', 'age_in_years' => 500],
            ['name' => 'env-3', 'age_in_years' => 450],
            ['name' => 'kosal', 'age_in_years' => 450],
            ['name' => 'polo', 'age_in_years' => 450],
        ]);
    }
}
