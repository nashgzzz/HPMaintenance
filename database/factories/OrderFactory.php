<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\ItemClient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'cantidad' => fake()->randomDigitNotNull(),
            'valor' => fake()->randomNumber(),
            'fecha_pedido' => fake()->datetime(),
            'user_id' => User::all()->random()->id,
            'item_client_id' => ItemClient::all()->random()->id,
        ];
    }
}
