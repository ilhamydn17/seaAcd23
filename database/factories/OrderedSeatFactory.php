<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderedSeat>
 */
class OrderedSeatFactory extends Factory
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
