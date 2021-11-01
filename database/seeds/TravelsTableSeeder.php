<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $new_travel = new Travel();	
            $new_travel->departure = $faker->city();
            $new_travel->destination = $faker->city();
            $new_travel->stopovers = $faker->boolean();
            $new_travel->departure_date = $faker->date();
            $new_travel->price = $faker->randomFloat(2, 100, 9999);
            $new_travel->save();
        }
    }
}
