<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarFactory extends Factory
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
            'patente' => fake()->regexify('[A-Z]{5}'),
            'color' => fake()->colorName(),
            'descripcion' => fake()->words(3, true),
            'car_models_id' => CarModel::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
