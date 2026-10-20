<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_number' => fake()->unique()->numerify('PAT-#####'),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'birth_date' => fake()
                ->dateTimeBetween('-80 years', '-1 day')
                ->format('Y-m-d'),
            'sex' => fake()->randomElement(['Male', 'Female']),
            'contact_number' => fake()->numerify('09#########'),
            'address' => fake()->address(),
        ];
    }
}
