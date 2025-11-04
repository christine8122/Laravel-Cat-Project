@extends('layouts.app')

@section('title', 'Contact Us - Mewin\' & Brewin\'')

@section('content')
<div class="text-center mb-12">
    <h1 class="text-4xl font-bold mb-4 text-purple-800">Contact Us</h1>
    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Have questions about our cats, menu, or adoption process? We'd love to hear from you!
        Visit us in person or get in touch using the information below.
    </p>
</div>

<div class="grid lg:grid-cols-2 gap-8">

    <!-- Contact Form -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-6 text-purple-800">Send Us a Message</h2>

        <!-- Note: This is a placeholder form for demo purposes -->
        <form class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                <input type="text" id="name" name="name"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                       placeholder="Enter your full name">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <input type="email" id="email" name="email"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                       placeholder="your.email@example.com">
            </div>

            <div>
                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                <select id="subject" name="subject"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors">
                    <option value="">Select a topic...</option>
                    <option value="adoption">Cat Adoption Inquiry</option>
                    <option value="reservation">Table Reservation</option>
                    <option value="menu">Menu Questions</option>
                    <option value="event">Private Events</option>
                    <option value="general">General Question</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                <textarea id="message" name="message" rows="5"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                          placeholder="Tell us how we can help you..."></textarea>
            </div>

            <div>
                <button type="submit"
                        class="w-full bg-purple-600 text-white py-3 px-6 rounded-lg hover:bg-pink-700 transition-colors font-medium">
                    Send Message
                </button>
            </div>
        </form>

        <div class="mt-4 text-sm text-gray-600 text-center">
        </div>
    </div>
</div>



</div>
@endsection
