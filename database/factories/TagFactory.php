<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{

    //Definimos el modelo
    protected $model = Tag::class;

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
