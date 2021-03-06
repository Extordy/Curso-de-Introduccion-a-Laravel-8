<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //datos falsos para curse
            'name' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(1280,720),
            'description' => $this->faker->text(800),

            //datos para la relacion
            'user_id' => rand(1,5),
            'category_id' => rand(1,3),
        ];
    }
}
