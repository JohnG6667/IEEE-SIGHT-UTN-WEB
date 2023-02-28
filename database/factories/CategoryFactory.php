<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    //Definimos el modelo
    protected $model = Category::class;

    //Colocamos los atributos,
    //con los tipos de datos a llenar
    public function definition()
    {

        $name =  $this->faker->unique()->word(20);
        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
