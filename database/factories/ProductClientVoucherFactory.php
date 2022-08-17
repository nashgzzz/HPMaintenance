<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ItemClient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productClientVoucher>
 */
class ProductClientVoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => Product::all()->random()->id,
            'item_clients_id' => ItemClient::all()->random()->id
        ];
    }
}
