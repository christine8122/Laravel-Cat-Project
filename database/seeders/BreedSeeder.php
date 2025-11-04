<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Breed;

class BreedSeeder extends Seeder
{
    public function run(): void
    {
        $breeds = [
            'Domestic Shorthair',
            'Domestic Longhair',
            'Siamese',
            'Persian',
            'Maine Coon',
            'British Shorthair',
            'Ragdoll',
            'Bengal',
            'Sphynx',
            'Scottish Fold',
            'American Shorthair',
            'Abyssinian',
        ];

        foreach ($breeds as $breed) {
            Breed::create(['name' => $breed]);
        }
    }
}
