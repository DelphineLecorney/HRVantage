<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recruitment>
 */
class RecruitmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'position_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->lastName,
            'firstname' => $this->faker->firstName,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'zip_code' => $this->faker->postcode,
            'country' => $this->faker->country,
            'status' => $this->faker->randomElement(['approved', 'rejected', 'pending']),
        ];
    }
}
