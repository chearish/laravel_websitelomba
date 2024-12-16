@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content')
<div class="container mx-auto mt-10 p-8">
    <h1 class="text-3xl font-bold">Members of Team: {{ $team->team_name }}</h1>

    <div class="mt-4">
        <a href="{{ route('admin.members.create', $team->id) }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
            Add Member
        </a>
    </div>

    <br>
    
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg p-8 overflow-x-auto">
        <table class="min-w-full text-sm text-left border border-gray-200 mt-6" id="events-table">
            <thead class="bg-gray-200 text-gray-700 uppercase font-medium">
                <tr>
                    <th class="px-6 py-4 border-b">Member Name</th>
                    <th class="px-6 py-4 border-b">Gender</th>
                    <th class="px-6 py-4 border-b">Birth Date</th>
                    <th class="px-6 py-4 border-b">Position</th>
                    <th class="px-6 py-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 border-b">{{ $member->member_name }}</td>
                    <td class="px-6 py-4 border-b">{{ $member->gender }}</td>
                    <td class="px-6 py-4 border-b">{{ $member->birth_date }}</td>
                    <td class="px-6 py-4 border-b">{{ $member->position }}</td>
                    <td class="px-6 py-4 border-b">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.members.edit', ['team_id' => $team->id, 'id' => $member->member_id]) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-2 rounded text-sm transition">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('admin.members.delete', ['team_id' => $team->id, 'id' => $member->member_id]) }}" method="POST" class="inline-block">
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
    <br>
    <div class="mb-4">
        <a href="{{ route('admin.home') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            ← Back to Teams
        </a>
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