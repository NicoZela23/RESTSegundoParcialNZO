<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class CuentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numerocuenta' => $this->faker->creditCardNumber(),
            'clienteid' => Cliente::inRandomOrder()->get()->first()->id,
            'moneda' => $this->faker->randomElement(['USD', 'EUR', 'GBP', 'JPY', 'CHF', 'CAD', 'CNY']),
            'fechaapertura' => $this->faker->date(),
        ];
    }
}
