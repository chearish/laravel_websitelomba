@extends('base')

@section('library-css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
@endsection

@section('content') 
<div class="p-8 container mx-auto mt-20">
    <div class="flex items-center space-x-4 mb-1">
        <span class="text-3xl font-bold ">Petra Cantare! International Choral Festival</span>
    </div>

    <div class="my-4">
        <button class="border border-black px-4 py-1">Filter by: None</button>
    </div>

    <p class="font-semibold mb-2">Total Registered Team:</p>


    <div class="p-6 bg-white shadow-lg rounded-lg overflow-x-auto">
    <table class="min-w-full table-auto border-collapse" id="events-table">
        <thead>
            <tr class="bg-gray-200">
            <th class="border px-4 py-2">Choir Name</th>
                    <th class="border px-4 py-2">Email Address</th>
                    <th class="border px-4 py-2">Short Biography</th>
                    <th class="border px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
                <tr>
                    <td class="border px-4 py-2">{{ $team->team_name }}</td>
                    <td class="border px-4 py-2">{{ $team->email }}</td>
                    <td class="border px-4 py-2">{{ $team->description }}</td>
                    <td class="border px-4 py-2 flex space-x-2">
                        <a href="" class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-3 rounded text-sm">✏️ Edit</a>
                        
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection

@section('library-js')
<script src="https://cdn.datatables.net/2.1.8/js/jquery.dataTables.min.js"></script>
@endsection
