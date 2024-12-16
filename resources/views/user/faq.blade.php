@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @endsection

@section('content')
<div class="container mx-auto mt-10 p-8">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Frequently Asked Questions (FAQ)</h1>

    <div class="space-y-8">
        <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h2 class="text-2xl font-semibold text-gray-800">Q: How will I receive important information?</h2>
            <p class="mt-3 text-gray-600 text-lg">
                A: All important information, updates, and instructions will be sent directly to your registered email address. Please ensure that your email is accurate and accessible.
            </p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h2 class="text-2xl font-semibold text-gray-800">Q: When will I receive the registration details?</h2>
            <p class="mt-3 text-gray-600 text-lg">
                A: Once your registration is successfully processed, you will receive an email containing all the relevant details and next steps. Please allow up to 48 hours for this process.
            </p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h2 class="text-2xl font-semibold text-gray-800">Q: What if I haven’t received any emails?</h2>
            <p class="mt-3 text-gray-600 text-lg">
                A: If you haven’t received any emails within the expected timeframe, please check your spam or junk folder. If the emails are still missing, feel free to contact us via email, and we will assist you promptly.
            </p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h2 class="text-2xl font-semibold text-gray-800">Q: How can I update my email address?</h2>
            <p class="mt-3 text-gray-600 text-lg">
                A: You can update your email address by reaching out to our support team. Please ensure your new email address is correct to receive important notifications.
            </p>
        </div>
    </div>

</div>
@endsection
