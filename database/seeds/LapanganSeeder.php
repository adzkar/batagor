<?php

use App\Lapangan;
use Illuminate\Database\Seeder;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Lapangan::class, 10)->create();
    }
}