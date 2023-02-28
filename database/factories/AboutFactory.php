<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{

    //Definimos el modelo
    protected $model = About::class;

    //Colocamos los atributos,
    //con los tipos de datos a llenar
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word(50),
            'description' => $this->faker->text(300),
        ];
    }
}
