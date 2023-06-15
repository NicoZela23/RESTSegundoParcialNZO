<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail,
            'password' => $this->faker->password(20),
            'rol' => $this->faker->jobTitle(),
        ];
    }
}
