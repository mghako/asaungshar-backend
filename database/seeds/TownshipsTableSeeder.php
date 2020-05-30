<?php

use App\Township;
use Illuminate\Database\Seeder;

class TownshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Township::class, 5)->create();
    }
}
