<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\levantamientoReq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LevantamientoReqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        levantamientoReq::factory(2)->create();
    }
}
