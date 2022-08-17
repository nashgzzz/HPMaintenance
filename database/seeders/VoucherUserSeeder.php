<?php

namespace Database\Seeders;

use App\Models\voucherUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VoucherUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        voucherUser::factory(2)->create();
    }
}
