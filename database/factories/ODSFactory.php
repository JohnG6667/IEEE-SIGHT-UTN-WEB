<?php

namespace Database\Factories;

use App\Models\ODS;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ODS>
 */
class ODSFactory extends Factory
{
    //Definimos el modelo
    protected $model = ODS::class;

    //Colocamos los atributos,
    //con los tipos de datos a llenar
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->sentence(),
            'status' => $this->faker->randomElement([1, 2]),
        ];
    }
}
