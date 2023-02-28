<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonia>
 */
class TestimonialFactory extends Factory
{


    //Definimos el modelo
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->sentence(),
            'last_name' => $this->faker->unique()->sentence(),
            'description' => $this->faker->text(250),
            'project_id' => Project::all()->random()->id,
        ];
    }
}
