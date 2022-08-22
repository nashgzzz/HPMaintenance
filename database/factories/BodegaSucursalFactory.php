<?php

namespace Database\Factories;

use App\Models\Adress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BranchOffice>
 */
class BodegaSucursalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->name(),
            'adress_id' => Adress::all()->random()->id,
        ];
    }
}
