<?php

use Illuminate\Database\Seeder;

class HostelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hostel::class, 5)->create();
    }
}
