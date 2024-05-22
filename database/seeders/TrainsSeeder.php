<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *

     */
    public function run(Faker $faker)
    {
        for($i = 1; $i <= 20; $i++){
            $train = new Train();
            $train->organization = $faker->randomElement(['FrecciaRossa', 'Italo', 'Trenitalia', 'Intercity']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('2024-05-22', '2024-05-23');
            $train->arrival_time = $faker->dateTimeBetween('2024-05-22', '2024-05-23');
            $randomString = md5(uniqid(rand(), true));
            $train->train_id = substr($randomString, 0, 16);
            $train->cabs = $faker->numberBetween(1, 16);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }
    }
}
