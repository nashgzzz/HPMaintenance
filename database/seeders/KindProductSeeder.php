<?php

namespace Database\Seeders;

use App\Models\KindProduct;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KindProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KindProduct::factory(2)->create();
    }
}
