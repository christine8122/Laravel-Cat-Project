@extends('layouts.app')

@section('title', 'Page Not Found - Mewin\' & Brewin\'')

@section('content')
<div class="text-center py-12">
    <!-- 404 Illustration -->
    <div class="mb-8">
        <div class="text-9xl mb-4">🐱</div>
        <h1 class="text-6xl font-bold text-amber-800 mb-4">404</h1>
        <h2 class="text-3xl font-bold text-gray-700 mb-6">Oops! This Cat Got Lost</h2>
    </div>

    <!-- Error Message -->
    <div class="max-w-2xl mx-auto mb-8">
        <p class="text-lg text-gray-600 mb-4">
            It looks like the page you're looking for has wandered off like a curious cat.
            Don't worry though - there are plenty of other great pages to explore!
        </p>
        <p class="text-gray-500">
            The page you requested could not be found. It might have been moved, deleted,
            or you may have mistyped the URL.
        </p>
    </div>

    <!-- Action Buttons -->
    <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
        <a href="{{ route('home') }}"
           class="inline-block bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition-colors font-medium">
            🏠 Go Home
        </a>
        <a href="{{ route('cats.index') }}"
           class="inline-block bg-amber-100 text-amber-800 px-6 py-3 rounded-lg hover:bg-amber-200 transition-colors font-medium">
            🐱 Meet Our Cats
        </a>
        <a href="{{ route('menu') }}"
           class="inline-block bg-amber-100 text-amber-800 px-6 py-3 rounded-lg hover:bg-amber-200 transition-colors font-medium">
             View Menu
        </a>
    </div>

    <!-- Fun Cat Facts Section -->
    <div class="mt-12 bg-amber-50 rounded-lg p-8 max-w-2xl mx-auto">
        <h3 class="text-xl font-bold text-amber-800 mb-4">🐾 Fun Cat Fact While You're Here!</h3>
        <p class="text-amber-700">
            Did you know that cats spend 70% of their lives sleeping? That's 13-16 hours a day!
            Our café cats are always well-rested and ready to play when you visit.
        </p>
    </div>

    <!-- Search Suggestions -->
    <div class="mt-8 text-sm text-gray-500">
        <p>Looking for something specific? Try these popular pages:</p>
        <div class="mt-3 space-x-4">
            <a href="{{ route('cats.index') }}" class="text-amber-600 hover:text-amber-800 transition-colors">Our Cats</a>
            <span class="text-gray-300">•</span>
            <a href="{{ route('menu') }}" class="text-amber-600 hover:text-amber-800 transition-colors">Menu</a>
            <span class="text-gray-300">•</span>
            <a href="{{ route('contact') }}" class="text-amber-600 hover:text-amber-800 transition-colors">Contact</a>
        </div>
    </div>
</div>
@endsection
