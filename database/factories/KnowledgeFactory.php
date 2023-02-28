<?php

namespace Database\Factories;

use App\Models\Knowledge;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Knowledge>
 */
class KnowledgeFactory extends Factory
{
    //Definimos el modelo
    protected $model = Knowledge::class;

    //Colocamos los atributos,
    //con los tipos de datos a llenar
    public function definition()
    {

        return [
            'name' => $this->faker->unique()->word(20),
            'status' => $this->faker->randomElement([1, 2])
        ];
    }
}
