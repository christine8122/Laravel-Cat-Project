@extends('layouts.app')

@section('title', 'Our Cats - Mewin\' & Brewin\'')

@section('content')

<!-- Page Header with Add Button -->
<div class="mb-8 flex justify-between items-center">
    <div>
        <h1 class="text-4xl font-bold text-purple-800 mb-2">Meet Our Furry Friends</h1>
        <p class="text-lg text-gray-600">
            All of our cats are available for adoption!
        </p>
    </div>

    @auth
    <a href="{{ route('cats.create') }}"
       class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700 transition-colors font-medium whitespace-nowrap">
        + Add New Cat
    </a>
    @endauth
</div>

<!-- Livewire Cat List Component -->
@livewire('cat-list')

<!-- Adoption Info -->
<div class="mt-12 bg-purple-100 rounded-lg p-8 text-center">
    <h2 class="text-2xl font-bold mb-4 text-purple-800">Interested in Adoption?</h2>
    <p class="text-lg text-pink-700 mb-4">
        All of our cats are spayed/neutered, up-to-date on vaccinations, and ready for their forever homes.
    </p>
    <a href="{{ route('contact') }}"
       class="inline-block bg-pink-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition-colors font-medium">
        Contact Us About Adoption
    </a>
</div>
@endsection
