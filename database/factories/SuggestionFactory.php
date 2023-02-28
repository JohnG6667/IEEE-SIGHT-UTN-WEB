<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Project;
use App\Models\Suggestion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suggestion>
 */
class SuggestionFactory extends Factory
{
    //Definimos el modelo
    protected $model = Suggestion::class;

    //Colocamos los atributos,
    //con los tipos de datos a llenar
    public function definition()
    {
        $name = $this->faker->unique()->sentence();

        return [
            'title' =>  $this->faker->unique()->sentence(),
            'description' => $this->faker->text(250),
            'place' => $this->faker->sentence(),
            'status' => $this->faker->randomElement([1, 2]),
            'user_id' => User::all()->random()->id,
            'project_id' => Project::all()->random()->id,
            'event_id' => Event::all()->random()->id,
        ];
    }
}
