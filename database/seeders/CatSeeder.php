<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cat;
use App\Models\Breed;

class CatSeeder extends Seeder
{
    public function run(): void
    {
        // Make sure we have breeds first
        $breedIds = Breed::pluck('id')->toArray();

        // Create 10-15 cats with random breeds
        Cat::factory()->count(12)->create([
            'breed_id' => function() use ($breedIds) {
                return $breedIds[array_rand($breedIds)];
            }
        ]);
    }
}
