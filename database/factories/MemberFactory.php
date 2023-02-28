<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    //Definimos el modelo
    protected $model = Member::class;

    //Colocamos los atributos,
    //con los tipos de datos a llenar
    public function definition()
    {

        return [
            'description' => $this->faker->text(250),
            'facebook' => $this->faker->unique()->url(),
            'instagram' => $this->faker->unique()->url(),
            'linkedin' => $this->faker->unique()->url(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
