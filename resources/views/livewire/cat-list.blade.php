<div>
    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input
                type="text"
                wire:model.live.debounce.300ms="search"
                placeholder="Search cats by name, breed, or tags..."
                class="w-full px-4 py-3 pl-10 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
            >
            <svg class="absolute left-3 top-3.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>

        @if($search)
        <div class="mt-2 text-sm text-gray-600">
            Found {{ $cats->count() }} {{ Str::plural('cat', $cats->count()) }} matching "{{ $search }}"
            <button
                wire:click="$set('search', '')"
                class="text-purple-600 hover:text-purple-800 ml-2 underline"
            >
                Clear search
            </button>
        </div>
        @endif
    </div>

    <!-- Cats Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($cats as $cat)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
            <!-- Cat Image Placeholder -->
            <div class="h-48 bg-gradient-to-br from-pink-200 to-purple-300 flex items-center justify-center">
                <span class="text-6xl">🐱</span>
            </div>

            <!-- Cat Information -->
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2 text-pink-800">{{ $cat->name }}</h3>

                <p class="text-gray-600 mb-2">
                    <span class="font-medium">Age:</span> {{ $cat->age }} {{ $cat->age == 1 ? 'year' : 'years' }} old
                </p>

                <p class="text-gray-600 mb-2">
                    <span class="font-medium">Breed:</span> {{ $cat->breed ? $cat->breed->name : 'Unknown' }}
                </p>

                <p class="text-gray-600 mb-4 text-sm">
                    <span class="font-medium">Tags:</span> {{ $cat->tags }}
                </p>

                <!-- View Details Button -->
                <a href="{{ route('cats.show', $cat->id) }}"
                   class="inline-block bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition-colors font-medium">
                    View Details
                </a>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12">
            <p class="text-gray-500 text-xl mb-4">
                @if($search)
                    No cats found matching "{{ $search }}"
                @else
                    No cats available yet.
                @endif
            </p>
            @auth
            <a href="{{ route('cats.create') }}"
               class="inline-block bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700 transition-colors font-medium">
                Add Your First Cat
            </a>
            @endauth
        </div>
        @endforelse
    </div>

    <!-- Loading Indicator -->
    <div wire:loading class="fixed top-20 right-4 bg-purple-600 text-white px-4 py-2 rounded-lg shadow-lg">
        <div class="flex items-center space-x-2">
            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span>Searching...</span>
        </div>
    </div>
</div>
