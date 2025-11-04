@extends('layouts.app')

@section('title', 'Register - Mewin\' & Brewin\'')

@section('content')
<div class="max-w-md mx-auto">
    <!-- Page Header -->
    <div class="mb-8 text-center">
        <h1 class="text-4xl font-bold text-purple-800 mb-2">Create Account</h1>
        <p class="text-gray-600">Join our cat café community</p>
    </div>

    <!-- Registration Form Card -->
    <div class="bg-white rounded-lg shadow-lg p-8">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <!-- Name Field -->
            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-medium mb-2">
                    Full Name <span class="text-red-500">*</span>
                </label>
                <input type="text"
                       id="name"
                       name="name"
                       value="{{ old('name') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('name') border-red-500 @enderror"
                       placeholder="Enter your full name"
                       autofocus
                       required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-medium mb-2">
                    Email Address <span class="text-red-500">*</span>
                </label>
                <input type="email"
                       id="email"
                       name="email"
                       value="{{ old('email') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('email') border-red-500 @enderror"
                       placeholder="your@email.com"
                       required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-medium mb-2">
                    Password <span class="text-red-500">*</span>
                </label>
                <input type="password"
                       id="password"
                       name="password"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('password') border-red-500 @enderror"
                       placeholder="Minimum 8 characters"
                       required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">
                    Confirm Password <span class="text-red-500">*</span>
                </label>
                <input type="password"
                       id="password_confirmation"
                       name="password_confirmation"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                       placeholder="Re-enter your password"
                       required>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                    class="w-full bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700 transition-colors font-medium">
                Create Account
            </button>
        </form>

        <!-- Login Link -->
        <div class="mt-6 text-center">
            <p class="text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="text-purple-600 hover:text-pink-700 font-medium">
                    Log in here
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
