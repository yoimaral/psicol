<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estudiantes;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiantes>
 */
class EstudiantesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'documento' => $this->faker->randomFloat(10, 1, 400),
            'nombre' => $this->faker->name,
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->email,
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->country(),
            'semestre' => $this->faker->numberBetween(1, 10)
        ];
    }
}
