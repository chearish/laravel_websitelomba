@extends('base')

@section('title', 'Categories')

@section('library-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
<script>
        function toggleDetails() {
            const details = document.getElementById('details');
            details.classList.toggle('hidden');
            if (!details.classList.contains('hidden')) {
                details.classList.add('fade-in');
            }
        }
    </script>
@endsection

@section('content')
<div style="background-color: rgba(255, 245, 225, 0.9);" class="min-h-screen flex justify-center items-center">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl w-full mx-auto mt-12">
        <!-- Title -->
        <h1 class="text-4xl font-bold mb-8 text-center text-gray-700">Prizes & Awards</h1>
        
        <!-- Description -->
        <div class="text-center text-gray-600">
            <p class="mb-4">
                Teams with the highest scores will be crowned as the <strong>Champion of Category</strong>.
            </p>
            <p class="mb-8">
                All participating teams will receive medals and certificates according to their total scores.
            </p>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse text-center">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="px-6 py-4 font-semibold uppercase">Category</th>
                        <th class="px-6 py-4 font-semibold uppercase">Prize Money</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php
                        $prizes = [
                            ['A0', 'IDR 3.000.000 / USD 200'],
                            ['A1', 'IDR 4.000.000 / USD 250'],
                            ['A2', 'IDR 4.000.000 / USD 250'],
                            ['A3', 'IDR 4.000.000 / USD 250'],
                            ['B1', 'IDR 4.000.000 / USD 250'],
                            ['B2', 'IDR 5.000.000 / USD 325'],
                            ['B3', 'IDR 5.000.000 / USD 325'],
                            ['F', 'IDR 3.000.000 / USD 200'],
                            ['S', 'IDR 3.000.000 / USD 200'],
                            ['C1', 'IDR 3.000.000 / USD 200'],
                            ['C2', 'IDR 3.000.000 / USD 200'],
                        ];
                    @endphp

                    @foreach($prizes as $prize)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 text-gray-700 font-medium">{{ $prize[0] }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $prize[1] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Grand Prix Section -->
        <div class="mt-12">
            <h1 class="text-3xl font-bold mb-4 text-center">Grand Prix</h1>
            <p class="mb-4 text-center">
                Participants that are qualified to compete in the Grand Prix include Category Champions or Choirs selected by the Jury.
            </p>
            <div class="text-center">
                <button onclick="toggleDetails()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Performance Details
                </button>
            </div>
            <div id="details" class="hidden mt-4 text-center">
                <p>Participants must perform two songs:</p>
                <ul class="list-disc list-inside">
                    <li>One song previously performed in the earlier round.</li>
                    <li>One free-choice song (not previously performed).</li>
                </ul>
                <p class="mt-2">Performance duration: <strong>10 minutes</strong>, including pauses.</p>
            </div>
            <p class="mt-4 text-center">
                The Grand Prix winner will receive a <strong>Trophy</strong> and a <strong>Cash Prize of IDR 15.000.000,-</strong>.
            </p>
        </div>
    </div>
</div>
@endsection
