<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BreedFactory extends Factory
{
    public function definition(): array
    {
        $breeds = [
            ['name' => 'Persian', 'desc' => 'Long-haired breed with a round face and short muzzle.'],
            ['name' => 'Siamese', 'desc' => 'Distinctive pointed coloration and blue eyes.'],
            ['name' => 'Maine Coon', 'desc' => 'Large, muscular breed with a thick coat.'],
            ['name' => 'Bengal', 'desc' => 'Wild-looking breed with spotted or marbled coat.'],
            ['name' => 'Ragdoll', 'desc' => 'Large, gentle breed that goes limp when picked up.'],
            ['name' => 'British Shorthair', 'desc' => 'Chunky, sturdy breed with a dense coat.'],
            ['name' => 'Sphynx', 'desc' => 'Hairless breed known for being warm and soft.'],
            ['name' => 'Scottish Fold', 'desc' => 'Distinctive folded ears and round face.'],
        ];

        $breed = $this->faker->randomElement($breeds);

        return [
            'name' => $breed['name'],
            'desc' => $breed['desc'],
        ];
    }
}
