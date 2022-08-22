<?php

namespace Database\Factories;

use App\Models\BodegaSucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemEmployee>
 */
class ItemClientFactory extends Factory
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
            'fecha_isntalacion' => fake()->datetime(),
            'descripcion' => fake()->words(3, true),
            'obvervaciones' => fake()->words(3, true),
            'bodega_sucursal_id' => BodegaSucursal::all()->random()->id,
        ];
    }
}
