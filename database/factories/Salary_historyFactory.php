<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salary_history>
 */
class Salary_historyFactory extends Factory
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
            'amount' => $this->faker->randomFloat(2, 0, 999999.99),
            'date' => $this->faker->date(),
        ];
    }
}
