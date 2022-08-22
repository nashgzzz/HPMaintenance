<?php

namespace Database\Seeders;

use App\Models\Bodega;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bodega::factory(2)->create();
    }
}
