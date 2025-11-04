<?php

namespace Database\Factories;

use App\Models\Breed;

use Illuminate\Database\Eloquent\Factories\Factory;

class CatFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'age' => fake()->numberBetween(1, 15),
            'breed_id' => Breed::factory(), // Creates a breed if needed
            'tags' => fake()->randomElement(['fluffy', 'playful', 'sleepy', 'friendly', 'curious']),
            'desc' => fake()->paragraph(),
        ];
    }
}
?>
