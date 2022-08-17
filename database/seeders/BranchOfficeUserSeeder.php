<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\branchOfficeUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BranchOfficeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        branchOfficeUser::factory(2)->create();
    }
}
