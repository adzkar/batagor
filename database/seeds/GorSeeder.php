<?php

use App\Gor;
use Illuminate\Database\Seeder;

class GorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Gor::class, 10)->create();
    }
}