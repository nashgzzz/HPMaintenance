<?php

namespace Database\Factories;

use App\Models\Adress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    
    public function definition()
    {
        return [
        
            'nombre' => fake()->name(),
            'rut' => fake()->randomNumber(9, true),
            'adress_id' => Adress::all()->random()->id
        ];
    }
}
