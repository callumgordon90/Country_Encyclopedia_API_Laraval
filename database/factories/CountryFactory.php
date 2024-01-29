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
            'national_sport' => $this->faker->randomElement(['Football', 'Basketball', 'Rugby', 'Baseball', 'Tennis', 'Boxing']),
            'national_food' => $this->faker->randomElement(['Pasta', 'Fish and Chips', 'Curry', 'Noodles', 'Pizza', 'Soup']),
            'population' => $this->faker->randomNumber(7),
            'nuclear_power' => $this->faker->boolean,
            'continent' => $this->faker->randomElement(['Asia', 'Europe', 'Africa', 'North America', 'South America', 'Australia', 'Antarctica']),
            'government_type' => $this->faker->randomElement(['Democracy', 'Monarchy', 'Republic', 'Oligarchy', 'Theocracy', 'Communism']),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
