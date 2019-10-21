<?php

use App\Detail_cart;
use Illuminate\Database\Seeder;

class Detail_cartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Detail_cart::class, 10)->create();
    }
}