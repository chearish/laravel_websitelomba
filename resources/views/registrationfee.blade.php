@extends('base')

@section('title', 'Registration Fee')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
@endsection

@section('content')
    <!-- Page Background -->

    <div style="background-color: rgba(255, 245, 225, 0.9);" class="min-h-screen flex items-center justify-center p-4">
        <!-- Card Container -->
        <div class="bg-white rounded-xl p-8 max-w-3xl w-full">
            <!-- Title -->
            <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Registration Fee</h1>

            <!-- Fees Information -->
            <div class="bg-white  rounded-xl p-4 max-w-3xl w-full">
                <!-- Title -->
                <!-- Fees Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full text-gray-700 border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-6 py-4 text-left font-semibold text-gray-800">Category</th>
                                <th class="px-6 py-4 text-left font-semibold text-gray-800">Fee</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="px-6 py-4 font-medium text-gray-800">Registration Fee for the First Category</td>
                                <td class="px-6 py-4">IDR 3.000.000,00,- / USD 200 / category</td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-4 font-medium text-gray-800">Early Bird for the First Category</td>
                                <td class="px-6 py-4">IDR 2.000.000,00,- / USD 130 / category</td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-4 font-medium text-gray-800">Registration Fee for the Second and Third Category</td>
                                <td class="px-6 py-4">IDR 2.000.000,00,- / USD 130 / category</td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-4 font-medium text-gray-800">Early Bird for the Second and Third Category</td>
                                <td class="px-6 py-4">IDR 1.500.000,00,- / USD 100 / category</td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-4 font-medium text-gray-800">Participation fee for each singer, conductor, and musician</td>
                                <td class="px-6 py-4">IDR 100.000,00,- / USD 7</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Timeline Section -->
            <br>
            <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Registration Timeline</h1>
            <br>
            <div class="space-y-8">
                <!-- Timeline Item -->
                <div class="flex items-start space-x-4">
                    <div class="h-10 w-10 bg-gray-800 text-white flex items-center justify-center rounded-full font-semibold">1</div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-800">8 September - 16 October 2024</h3>
                        <p class="text-gray-600">Early Bird Registration</p>
                    </div>
                </div>
                <!-- Timeline Item -->
                <div class="flex items-start space-x-4">
                    <div class="h-10 w-10 bg-gray-800 text-white flex items-center justify-center rounded-full font-semibold">2</div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-800">8 September - 16 December 2024</h3>
                        <p class="text-gray-600">Regular Registration</p>
                    </div>
                </div>
                <!-- Timeline Item -->
                <div class="flex items-start space-x-4">
                    <div class="h-10 w-10 bg-gray-800 text-white flex items-center justify-center rounded-full font-semibold">3</div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-800">21 December 2024</h3>
                        <p class="text-gray-600">Deadline for Document Submission</p>
                    </div>
                </div>
                <!-- Timeline Item -->
                <div class="flex items-start space-x-4">
                    <div class="h-10 w-10 bg-gray-800 text-white flex items-center justify-center rounded-full font-semibold">4</div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-800">17-22 February 2025</h3>
                        <p class="text-gray-600">Competition Period</p>
                    </div>
                </div>
            </div>

            <!-- QR Code -->
            <div class="flex justify-center mt-10">
                <img src="{{ asset('images/qr-code.png') }}" alt="QR Code" class="w-32 h-32 rounded-lg shadow-md">
            </div>
        </div>
    </div>
@endsection
