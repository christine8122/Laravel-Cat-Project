<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mewin\' & Brewin\'')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- ADD THIS: Livewire Styles -->
    @livewireStyles

    <style>
        /* Custom styles for M&B theme */
        .nav-link {
            @apply px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200;
        }
        .nav-link:hover {
            @apply bg-purple-100 text-purple-800;
        }
        .nav-link.active {
            @apply bg-purple-200 text-purple-900;
        }
    </style>
</head>
<body class="bg-purple-50 min-h-screen">
    <!-- Navigation Header -->
    <header class="bg-purple-600 shadow-lg">
        <!-- Your existing navigation code... -->
    </header>

    <!-- Flash Messages -->
    @if(session('success'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    </div>
    @endif

    @if(session('error'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    </div>
    @endif

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-purple-800 text-white mt-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} Mewin' & Brewin'. All rights reserved.</p>
                <p class="text-sm mt-1">Lakeland's Fluffiest Cats & Froathiest Coffee Hall</p>
            </div>
        </div>
    </footer>

    <!-- ADD THIS: Livewire Scripts -->
    @livewireScripts
</body>
</html>
