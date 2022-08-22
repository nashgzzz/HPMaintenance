<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\BodegaSucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\branchOfficeUser>
 */
class BranchOfficeUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'bodega_sucursal_id' => BodegaSucursal::all()->random()->id
        ];
    }
}
