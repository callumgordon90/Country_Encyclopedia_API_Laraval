<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->country,
            'capital' => $this->faker->city,
            'national_sport' => $this->faker->word,
            'national_food' => $this->faker->word,
            'population' => $this->faker->randomNumber(7),
            'nuclear_power' => $this->faker->boolean,
            'continent' => $this->faker->word,
            'government_type' => $this->faker->word,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
