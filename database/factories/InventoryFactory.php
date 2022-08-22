<?php

namespace Database\Factories;


use App\Models\Container;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
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
            'mail' => fake()->safeEmail(),
            'descripcion' => fake()->words(5, true)
        ];
    }
}
