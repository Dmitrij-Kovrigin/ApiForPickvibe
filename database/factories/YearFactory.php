<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class YearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => $this->faker->year
        ];
    }
}
