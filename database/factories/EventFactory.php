<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{

    //Definimos el modelo
    protected $model = Event::class;

    //Colocamos los atributos,
    //con los tipos de datos a llenar
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            'title' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(10000),
            'status' => $this->faker->randomElement([1, 2]),
            'entity' => $this->faker->unique()->sentence(),
            'place' => $this->faker->sentence(),
            'event_date' => $this->faker->dateTime(),
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,

        ];
    }
}
