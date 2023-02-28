<?php

namespace Database\Factories;

use App\Models\Objetive;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Objetive>
 */
class ObjetiveFactory extends Factory
{
    //Definimos el modelo
    protected $model = Objetive::class;

    //Colocamos los atributos,
    //con los tipos de datos a llenar
    public function definition()
    {

        return [
            'description' => $this->faker->text(250),
            'project_id' => Project::all()->random()->id,

        ];
    }
}
