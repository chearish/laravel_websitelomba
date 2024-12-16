@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
@endsection

@section('content')
<div class="container mx-auto mt-16 p-8">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Contact Us</h1>

    <!-- Contact Information Section -->
    <div class="lg:grid lg:grid-cols-2 lg:gap-12 gap-8">
        <!-- Contact Details -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">We’d Love to Hear From You!</h2>
            <p class="text-lg text-gray-600 mb-6">If you have any questions or need assistance, feel free to contact us through any of the following methods:</p>

            <ul class="space-y-6">
                <li class="flex items-center space-x-4 text-gray-600">
                    <span class="material-icons-outlined text-black-500 text-lg">Email</span>
                    <a href="mailto:support@yourdomain.com" class="text-blue-500 hover:underline text-lg">petracantare@petra.ac.id</a>
                </li>
                <li class="flex items-center space-x-4 text-gray-600">
                    <span class="material-icons-outlined text-black-500 text-lg">Phone</span>
                    <span class="text-black-500 text-lg">+6285345678991</span>
                </li>
                <li class="flex items-center space-x-4 text-gray-600">
                    <span class="material-icons-outlined text-black-500 text-lg">Location</span>
                    <span class="text-lg">Surabaya, Indonesia</span>
                </li>
            </ul>
        </div>

        <!-- Office Hours -->
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Office Hours</h2>
            <p class="text-lg text-gray-600 mb-6">Our office is open for you during these hours:</p>

            <ul class="space-y-6">
                <li class="text-gray-600">
                    <strong class="font-semibold">Monday - Friday:</strong> 9:00 AM - 6:00 PM
                </li>
                <li class="text-gray-600">
                    <strong class="font-semibold">Saturday:</strong> 10:00 AM - 4:00 PM
                </li>
                <li class="text-gray-600">
                    <strong class="font-semibold">Sunday:</strong> Closed
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
