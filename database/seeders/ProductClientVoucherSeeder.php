<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\productClientVoucher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductClientVoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productClientVoucher::factory(2)->create();
    }
}
