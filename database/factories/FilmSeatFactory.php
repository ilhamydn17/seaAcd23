<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class FilmSeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'film_id' => 1,
            'seat_id'=> $this->faker->unique()->numberBetween(1, 64),
            'is_ordered'=> 0
        ];
    }
}
