<?php

namespace Database\Factories;

use App\Models\Store;
use App\Models\Bodega;
use App\Models\Supplier;
use App\Models\Inventory;
use App\Models\KindProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'direccion' => fake()->streetname(),
            'serie' =>fake()->numerify(),
            'iva' =>fake()->numberBetween(0, 20),
            'precio' =>fake()->randomNumber(6, true),
            'inventory_id' => Inventory::all()->random()->id,
            'supplier_id' => Supplier::all()->random()->id,
            'kind_products_id' => KindProduct::all()->random()->id,
            'store_id' => Store::all()->random()->id,
            'bodega_id' => Bodega::all()->random()->id
        ];
    }
}
