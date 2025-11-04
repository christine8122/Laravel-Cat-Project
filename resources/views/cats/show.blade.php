@extends('layouts.app')

@section('title', $cat->name . ' - Mewin\' & Brewin\'')

@section('content')
<!-- Back Navigation -->
<div class="mb-6">
    <a href="{{ route('cats.index') }}"
       class="inline-flex items-center text-purple-600 hover:text-amber-800 transition-colors">
        <span class="mr-2">←</span> Back to All Cats
    </a>
</div>

<!-- Cat Details Container -->
<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="md:flex">
        <!-- Cat Image Section -->
        <div class="md:w-1/2">
            <div class="h-96 bg-gradient-to-br from-purple-200 to-pink-400 flex items-center justify-center">
                <span class="text-8xl">🐱</span>
            </div>
        </div>

        <!-- Cat Information Section -->
        <div class="md:w-1/2 p-8">
            <h1 class="text-3xl font-bold mb-4 text-purple-800">{{ $cat->name }}</h1>

            <div class="space-y-4">
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-pink-800 mb-2">About {{ $cat->name }}</h3>
                    <p class="text-gray-700">
                        {{ $cat->desc }}
                    </p>
                </div>

                <!-- Cat Details from Database -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-medium text-gray-700">Age:</span>
                        <p class="text-gray-600">{{ $cat->age }} years old</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-medium text-gray-700">Breed:</span>
                        <p class="text-gray-600">{{ $cat->breed ? $cat->breed->name : 'Unknown' }}</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-medium text-gray-700">Tags:</span>
                        <p class="text-gray-600">{{ $cat->tags }}</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-medium text-gray-700">Cat ID:</span>
                        <p class="text-gray-600">#{{ $cat->id }}</p>
                    </div>
                </div>

                <div class="bg-blue-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Personality</h4>
                    <p class="text-blue-700">
                        {{ $cat->name }} is a wonderful {{ $cat->age }}-year-old {{ $cat->breed ? $cat->breed->name : 'cat' }}
                        with a unique personality. Known for being {{ $cat->tags }}, this sweet feline is looking for a loving home!
                    </p>
                </div>

                <div class="bg-green-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Adoption Ready</h4>
                    <p class="text-green-700">
                        {{ $cat->name }} is spayed/neutered, vaccinated, and ready for their forever home.
                    </p>
                </div>
            </div>

          <!-- Action Buttons -->
<div class="mt-8 space-y-3">
    <a href="{{ route('contact') }}"
       class="block w-full bg-purple-600 text-white text-center px-6 py-3 rounded-lg hover:bg-pink-700 transition-colors font-medium">
        Inquire About {{ $cat->name }}
    </a>
    <a href="{{ route('cats.index') }}"
       class="block w-full bg-pink-100 text-pink-800 text-center px-6 py-3 rounded-lg hover:bg-purple-200 transition-colors font-medium">
        View All Cats
    </a>

    <!-- Delete Button - Only show if logged in -->
    @auth
    <form action="{{ route('cats.destroy', $cat->id) }}" method="POST"
          onsubmit="return confirm('Are you sure you want to delete {{ $cat->name }}? This action cannot be undone.');"
          class="mt-3">
        @csrf
        @method('DELETE')
        <button type="submit"
                class="block w-full bg-red-600 text-white text-center px-6 py-3 rounded-lg hover:bg-red-700 transition-colors font-medium">
            Delete {{ $cat->name }}
        </button>
    </form>
    @endauth
</div>
        </div>
    </div>
</div>

<!-- Additional Info -->
<div class="mt-8 bg-pink-100 rounded-lg p-6">
    <h3 class="text-lg font-semibold mb-3 text-purple-800">Visit Our Cat Café</h3>
    <p class="text-pink-700">
        Come spend time with {{ $cat->name }} and all our other cats in our comfortable café environment.
        Enjoy coffee, snacks, and quality time with our furry friends.
    </p>
</div>
@endsection
