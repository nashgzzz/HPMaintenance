<?php

namespace Database\Factories;

use App\Models\BranchOffice;
use App\Models\productClientVoucher;
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
            'branch_office_id' => BranchOffice::all()->random()->id,
            'product_client_vouchers' => productClientVoucher::all()->random()->id,
        ];
    }
}
