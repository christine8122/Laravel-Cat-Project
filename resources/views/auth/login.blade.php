@extends('layouts.app')

@section('title', 'Login - Mewin\' & Brewin\'')

@section('content')
<div class="max-w-md mx-auto">
    <!-- Page Header -->
    <div class="mb-8 text-center">
        <h1 class="text-4xl font-bold text-purple-800 mb-2">Welcome Back</h1>
        <p class="text-gray-600">Log in to your account</p>
    </div>

    <!-- Login Form Card -->
    <div class="bg-white rounded-lg shadow-lg p-8">
        <form action="{{ route('login') }}" method="POST">
            @csrf

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
                       autofocus
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
                       placeholder="Enter your password"
                       required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me Checkbox -->
            <div class="mb-6">
                <label class="flex items-center">
                    <input type="checkbox"
                           name="remember"
                           class="rounded border-gray-300 text-purple-600 focus:ring-purple-500">
                    <span class="ml-2 text-gray-700">Remember me</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                    class="w-full bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700 transition-colors font-medium">
                Log In
            </button>
        </form>

        <!-- Register Link -->
        <div class="mt-6 text-center">
            <p class="text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-purple-600 hover:text-pink-700 font-medium">
                    Register here
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
