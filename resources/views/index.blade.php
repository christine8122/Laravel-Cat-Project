@extends('layouts.app')

@section('title', 'Welcome to Mewin\' & Brewin\'')

@section('content')
<div class="text-center">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-purple-400 to-pink-600 rounded-lg p-12 mb-8 text-white">
        <h1 class="text-5xl font-bold mb-4">Welcome to Mewin' & Brewin'</h1>
        <p class="text-xl mb-6">Lakeland's Premier Cat Café</p>
        <p class="text-lg opacity-90">Purrs and Purees!</p>
    </div>

    <!-- Feature Cards -->
    <div class="grid md:grid-cols-3 gap-8 mb-12">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="text-4xl mb-4">🐱</div>
            <h3 class="text-xl font-semibold mb-3 text-pink-400">Adorable Cats</h3>
            <p class="text-gray-600">Meet our cats who are looking for their forever homes.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="text-4xl mb-4">☕</div>
            <h3 class="text-xl font-semibold mb-3 text-pink-500">Premium Coffee</h3>
            <p class="text-gray-600">Enjoy yummy coffee, specialty lattes, and delicious pastries while spending quality time with our fuzzy felines.</p>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-3xl font-bold mb-4 text-purple-800">Ready to Visit?</h2>
        <p class="text-lg text-gray-600 mb-6">Come experience the fun!</p>
        <div class="space-x-4">
            <a href="{{ route('cats.index') }}" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700 transition-colors font-medium">
                Meet Our Cats
            </a>
            <a href="{{ route('menu') }}" class="bg-pink-100 text-black px-6 py-3 rounded-lg hover:bg-purple-200 transition-colors font-medium">
                View Menu
            </a>
        </div>
    </div>
</div>
@endsection
