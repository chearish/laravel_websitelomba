@extends('base')

@section('title', 'Registered Teams')

@section('library-css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content') 
<div class="container mx-auto mt-20 p-8">
    <div class="flex items-center space-x-4 mb-6">
        <h1 class="text-3xl font-bold">Petra Cantare! International Choral Festival</h1>
    </div>

    <div class="my-4">
        <button class="border border-gray-400 px-4 py-2 rounded hover:bg-gray-200">
            Filter by: None
        </button>
    </div>

    
    <p class="font-semibold text-lg mb-4">Total Registered Team:</p>
    <div class="bg-white shadow-md rounded-lg mt-20">
        <table class="min-w-full text-sm text-left border border-gray-200" id="events-table">
            <thead class="bg-gray-200 text-gray-700 uppercase font-medium">
                <tr>
                    <th class="px-6 py-4 border-b">Choir Name</th>
                    <th class="px-6 py-4 border-b">Email Address</th>
                    <th class="px-6 py-4 border-b">Short Biography</th>
                    <th class="px-6 py-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 border-b text-gray-600">{{ $team->team_name }}</td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $team->email }}</td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $team->description }}</td>
                    <td class="px-6 py-4 border-b">
                        <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-2 rounded text-sm transition">
                            ✏️ Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('library-js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script>
    $(document).ready(function() {
        $('#events-table').DataTable({
            responsive: true,
            autoWidth: false,
            pageLength: 5,
            language: {
                search: "Search:",
                lengthMenu: "Show _MENU_ entries",
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                paginate: {
                    previous: "Previous",
                    next: "Next"
                }
            }
        });
    });
</script>
@endsection
