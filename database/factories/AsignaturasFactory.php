<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asignaturas;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asignaturas>
 */
class AsignaturasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->name,
            "descripcion" => $this->faker->text(200),
            "credito" => $this->faker->randomDigit(),
            "area" => $this->faker->randomElement(["electivaa", "obligatoria"]),
        ];
    }
}
