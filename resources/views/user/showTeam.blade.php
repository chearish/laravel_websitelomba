@extends('base')



@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content') 
<div class="container mx-auto mt-10 p-8">
    <div class="flex flex-col lg:flex-row items-start space-y-6 lg:space-y-0 lg:space-x-6 mb-6">
        <div class="flex-1">
            <h1 class="text-3xl font-bold">{{ $team->team_name }} - Detail Members</h1>
            <h2 class="text-xl font-semibold mt-4 text-gray-600">
                Category: 
                {{ $team->categories->where('category_id', $category->category_id)->first()->category_name }}
            </h2>
            @if ($registrationStatus === 'Verified')
                <a href="{{ route('teams.add-member', ['teamId' => $team->id, 'categoryId' => $category->category_id]) }}" 
                    class="bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-4 inline-block">
                    + Add Member
                </a>
            @else
                <div class="bg-yellow-100 border border-yellow-500 text-yellow-700 px-4 py-2 rounded mt-4 inline-block">
                    Registration is not verified yet. Please wait for the verification process.
                </div>
            @endif
        </div>


        <div class="flex-1">
        </div>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="bg-white shadow-md rounded-lg p-8 overflow-x-auto">
        <table class="min-w-full text-sm text-left border border-gray-200 " id="events-table">
            <thead class="bg-gray-200 text-gray-700 uppercase font-medium">
                <tr>
                    <th class="px-6 py-4 border-b">Name</th>
                    <th class="px-6 py-4 border-b">Gender</th>
                    <th class="px-6 py-4 border-b">Birth Date</th>
                    <th class="px-6 py-4 border-b">Position</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($team->members as $member)
                <tr>
                    <td class="px-6 py-4 border-b">{{ $member->member_name }}</td>
                    <td class="px-6 py-4 border-b">{{ $member->gender }}</td>
                    <td class="px-6 py-4 border-b">{{ $member->birth_date }}</td>
                    <td class="px-6 py-4 border-b">{{ $member->position }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <br>
    <div class="mb-4">
        <a href="{{ route('user.home') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            ← Back to Teams
        </a>
    </div>
</div>
@endsection
