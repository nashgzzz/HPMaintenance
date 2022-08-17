<?php

namespace Database\Factories;

use App\Models\State;
use App\Models\Adress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->city(),
            'states_id' => State::all()->random()->id,
            'adress_id' => Adress::all()->random()->id
        ];
    }
}
