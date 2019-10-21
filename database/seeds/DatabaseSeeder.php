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
        $this->call(GorSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(Detail_cartSeeder::class);
        $this->call(LapanganSeeder::class);
        $this->call(RatingSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(CartSeeder::class);
    }
}