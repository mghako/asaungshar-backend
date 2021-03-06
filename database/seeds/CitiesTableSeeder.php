<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(City::class, 5)->create()->each(function($city) {
            $city->townships()->save(factory(App\Township::class)->make());
        });
    }
}
