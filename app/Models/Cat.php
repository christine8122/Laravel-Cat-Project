<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

       protected $fillable = ['name', 'age', 'tags', 'desc', 'breed_id'];



        // Add any other existing fields


    // Relationship: A cat belongs to a breed
    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
}
