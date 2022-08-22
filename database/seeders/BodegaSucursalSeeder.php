<?php

namespace Database\Seeders;


use App\Models\BodegaSucursal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BodegaSucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BodegaSucursal::factory(2)->create();
    }
}
