<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeYearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_id' => $this->faker->numberBetween(1, 30),
            'year_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
