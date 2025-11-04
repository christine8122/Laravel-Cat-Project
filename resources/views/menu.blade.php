@extends('layouts.app')

@section('title', 'Menu - Mewin\' & Brewin\'')

@section('content')
<div class="text-center mb-12">
    <h1 class="text-4xl font-bold mb-4 text-purple-800">Our Menu</h1>
    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Enjoy delicious food and drinks while spending time with our adorable cats.
        Our menu features coffee, and tasty treats for humans and cats alike!
    </p>
</div>

<!-- Menu Sections -->
<div class="grid lg:grid-cols-2 gap-8">
    <!-- Coffee & Hot Beverages -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center mb-6">
            <span class="text-3xl mr-3">☕</span>
            <h2 class="text-2xl font-bold text-purple-800">Coffee & Hot Beverages</h2>
        </div>
        <div class="space-y-4">
            <div class="border-b border-gray-200 pb-3">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">House Blend Coffee</h3>
                        <p class="text-sm text-gray-600">Rich and smooth daily blend</p>
                    </div>
                    <span class="text-amber-600 font-medium">$3.50</span>
                </div>
            </div>
            <div class="border-b border-gray-200 pb-3">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Cat-puccino</h3>
                        <p class="text-sm text-gray-600">Specialty cappuccino with cat latte art</p>
                    </div>
                    <span class="text-amber-600 font-medium">$4.75</span>
                </div>
            </div>
            <div class="border-b border-gray-200 pb-3">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Purr-fect Chai Latte</h3>
                        <p class="text-sm text-gray-600">Spiced chai with steamed milk</p>
                    </div>
                    <span class="text-amber-600 font-medium">$4.25</span>
                </div>
            </div>
            <div class="text-center text-gray-500 text-sm pt-2">
                <em>More beverages coming soon!</em>
            </div>
        </div>
    </div>



    <!-- Snacks & Light Bites -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center mb-6">
            <span class="text-3xl mr-3">🥐</span>
            <h2 class="text-2xl font-bold text-purple-800">Snacks & Pastries</h2>
        </div>
        <div class="space-y-4">
            <div class="border-b border-gray-200 pb-3">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Fresh Croissants</h3>
                        <p class="text-sm text-gray-600">Buttery, flaky pastries baked daily</p>
                    </div>
                    <span class="text-amber-600 font-medium">$3.25</span>
                </div>
            </div>
            <div class="border-b border-gray-200 pb-3">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Cat-shaped Cookies</h3>
                        <p class="text-sm text-gray-600">Adorable sugar cookies for cat lovers</p>
                    </div>
                    <span class="text-amber-600 font-medium">$2.75</span>
                </div>
            </div>
            <div class="border-b border-gray-200 pb-3">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Assorted Muffins</h3>
                        <p class="text-sm text-gray-600">Blueberry, chocolate chip, and seasonal flavors</p>
                    </div>
                    <span class="text-amber-600 font-medium">$3.50</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Cat Treats -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center mb-6">
            <span class="text-3xl mr-3">🐾</span>
            <h2 class="text-2xl font-bold text-purple-800">For Our Feline Friends</h2>
        </div>
        <div class="space-y-4">
            <div class="border-b border-gray-200 pb-3">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Cat Treats</h3>
                        <p class="text-sm text-gray-600">Special treats approved for our café cats</p>
                    </div>
                    <span class="text-amber-600 font-medium">$2.00</span>
                </div>
            </div>
            <div class="border-b border-gray-200 pb-3">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Interactive Toys</h3>
                        <p class="text-sm text-gray-600">Play with the cats using our safe toys</p>
                    </div>
                    <span class="text-amber-600 font-medium">Free</span>
                </div>
            </div>
            <div class="text-center text-gray-500 text-sm pt-2">
                <em>Please ask staff before giving treats to cats</em>
            </div>
        </div>
    </div>
</div>

@endsection
