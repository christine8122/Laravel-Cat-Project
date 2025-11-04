@extends('layouts.app')

@section('title', 'Add a Cat - Mewin\' & Brewin\'')

@section('content')
<div class="max-w-2xl mx-auto">
    <!-- Back Navigation -->
    <div class="mb-6">
        <a href="{{ route('cats.index') }}"
           class="inline-flex items-center text-purple-600 hover:text-amber-800 transition-colors">
            <span class="mr-2">←</span> Back to All Cats
        </a>
    </div>

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-purple-800 mb-2">Add a New Cat</h1>
        <p class="text-gray-600">Fill out the form below to add a cat to our café.</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-lg shadow-lg p-8">
        <form action="{{ route('cats.store') }}" method="POST">
            @csrf

            <!-- Name Field -->
            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-medium mb-2">
                    Cat Name <span class="text-red-500">*</span>
                </label>
                <input type="text"
                       id="name"
                       name="name"
                       value="{{ old('name') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('name') border-red-500 @enderror"
                       placeholder="Enter cat's name">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Age Field -->
            <div class="mb-6">
                <label for="age" class="block text-gray-700 font-medium mb-2">
                    Age (in years) <span class="text-red-500">*</span>
                </label>
                <input type="number"
                       id="age"
                       name="age"
                       value="{{ old('age') }}"
                       min="0"
                       max="30"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('age') border-red-500 @enderror"
                       placeholder="Enter cat's age">
                @error('age')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Breed Field -->
            <div class="mb-6">
                <label for="breed_id" class="block text-gray-700 font-medium mb-2">
                    Breed <span class="text-red-500">*</span>
                </label>
                <select id="breed_id"
                        name="breed_id"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('breed_id') border-red-500 @enderror">
                    <option value="">Select a breed</option>
                    @foreach($breeds as $breed)
                        <option value="{{ $breed->id }}" {{ old('breed_id') == $breed->id ? 'selected' : '' }}>
                            {{ $breed->name }}
                        </option>
                    @endforeach
                </select>
                @error('breed_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tags Field -->
            <div class="mb-6">
                <label for="tags" class="block text-gray-700 font-medium mb-2">
                    Tags <span class="text-red-500">*</span>
                </label>
                <input type="text"
                       id="tags"
                       name="tags"
                       value="{{ old('tags') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('tags') border-red-500 @enderror"
                       placeholder="e.g., playful, friendly, energetic">
                <p class="text-gray-500 text-sm mt-1">Comma-separated personality traits</p>
                @error('tags')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description Field -->
            <div class="mb-6">
                <label for="desc" class="block text-gray-700 font-medium mb-2">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea id="desc"
                          name="desc"
                          rows="5"
                          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('desc') border-red-500 @enderror"
                          placeholder="Tell us about this cat...">{{ old('desc') }}</textarea>
                <p class="text-gray-500 text-sm mt-1">Minimum 10 characters</p>
                @error('desc')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex gap-4">
                <button type="submit"
                        class="flex-1 bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700 transition-colors font-medium">
                    Add Cat
                </button>
                <a href="{{ route('cats.index') }}"
                   class="flex-1 bg-gray-200 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-300 transition-colors font-medium text-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
