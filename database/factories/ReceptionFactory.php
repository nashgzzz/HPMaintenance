<?php

namespace Database\Factories;


use App\Models\ItemClient;
use App\Models\BodegaSucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reception>
 */
class ReceptionFactory extends Factory
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
            'descripcion' => fake()->words(5, true),
            'fecha' => fake()->datetime(),
            'item_clients_id' => ItemClient::all()->random()->id,
            'bodega_sucursal_id' => BodegaSucursal::all()->random()->id,
        ];
    }
}
