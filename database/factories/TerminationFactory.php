<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Termination>
 */
class TerminationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => $this->faker->randomNumber(),
            'position_id' => $this->faker->randomNumber(),
            'date' => $this->faker->date(),
            'comment' => $this->faker->text(100),
        ];
    }
}
