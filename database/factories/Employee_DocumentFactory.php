<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee_Document>
 */
class Employee_DocumentFactory extends Factory
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
            'name' => $this->faker->word,
            'document' => $this->faker->word,
            'status' => $this->faker->word,
            'type' => $this->faker->word,
            'description' => $this->faker->text,
        ];
    }
}
