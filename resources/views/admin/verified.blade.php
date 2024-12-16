@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content')
<div class="container mx-auto mt-10 p-8">
    <div class="flex items-center space-x-4 mb-6">
        <h1 class="text-3xl font-bold">VERIFIED REGISTERED TEAM</h1>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <p class="font-semibold text-lg mb-4">Total Verified Registered Team:  {{ $registrations->count() }} </p>

    <!-- Category Filter Dropdown -->
    <div class="mt-4 mb-4 flex justify-between items-center">
        <form method="GET" action="{{ route('admin.home') }}" class="flex items-center">
            <select name="category_id" class="px-4 py-2 rounded border border-gray-300" onchange="this.form.submit()">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ request('category_id') == $category->category_id ? 'selected' : '' }}>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="bg-white shadow-md rounded-lg p-8 overflow-x-auto">
        <table class="min-w-full text-sm text-left border border-gray-200" id="events-table">
            <thead class="bg-gray-200 text-gray-700 uppercase font-medium">
                <tr>
                    <th class="px-6 py-4 border-b">Choir Name</th>
                    <th class="px-6 py-4 border-b">Email Address</th>
                    <th class="px-6 py-4 border-b">Short Biography</th>
                    <th class="px-6 py-4 border-b">Total Member</th>
                    <th class="px-6 py-4 border-b">Category</th>
                    <th class="px-6 py-4 border-b">Last Updated</th>
                    <th class="px-6 py-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrations as $registration)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 border-b text-gray-600">
                        <a href="{{ route('admin.members.show', $registration->team->id) }}" class="text-blue-500 hover:underline">
                            {{ $registration->team->team_name }}
                        </a>
                    </td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $registration->team->user->email }}</td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $registration->team->description }}</td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $registration->team->total_member }}</td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $registration->category->category_name }}</td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $registration->updated_at->format('Y-m-d H:i:s') }}</td> <!-- Display Updated At -->
                    <td class="px-6 py-4 border-b">
                        <div class="flex space-x-2">

                            <a href="{{ route('admin.registered.edit', $registration->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-2 rounded text-sm transition">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('admin.registered.destroy', $registration->id) }}" 
                                method="POST" 
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded text-sm transition"
                                        onclick="return confirm('Are you sure you want to delete this record?');">
                                    🗑️ Delete
                                </button>
                            </form>
                        </div>
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
            pageLength: 5,
            order: [[5, 'desc']], // Sort by "Last Updated" column (index starts at 0)
            language: {
                search: "Search:",
                lengthMenu: "Show _MENU_ entries",
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                paginate: {
                    previous: "Previous",
                    next: "Next"
                }
            },
            columnDefs: [
                { targets: 5, type: 'date' } // Ensure the "Last Updated" column is treated as a date
            ]
        });
    });
</script>
@endsection
