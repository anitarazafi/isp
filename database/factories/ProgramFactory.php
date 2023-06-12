<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country' => fake()->country(),
            'city' => fake()->city(),
            'degree' => fake()->words(2),
            'program_name' => fake()->words(3),
            'university'=> fake()->words(2),
            'faculty' => fake()->words(2),
            'detail' => fake()->text()
         ];
    }
}
