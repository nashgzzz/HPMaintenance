<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\BodegaSucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
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
            'serie' =>fake()->numerify(),
            'hora_llegada' => $this->faker->time(),
            'hora_salida' => $this->faker->time(),
            'fecha' => fake()->datetime(),
            'observaciones' => fake()->words(3, true),
            'bodega_sucursal_id' => BodegaSucursal::all()->random()->id,
            'products_id' => Product::all()->random()->id
        ];
    }
}
