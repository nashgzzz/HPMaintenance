<?php

namespace Database\Factories;

use App\Models\ItemClient;
use Illuminate\Database\Eloquent\Factories\Factory;


class LevantamientoReqFactory extends Factory
{
   
    public function definition()
    {
        return [
            'item_clients_id' => ItemClient::all()->random()->id
        ];
    }
}
