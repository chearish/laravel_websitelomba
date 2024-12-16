@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content')
<div class="container mx-auto mt-10 p-8">
    <!-- Header -->
    <h1 class="text-3xl font-bold mb-6">Add Member to {{ $team->team_name }}: {{ $category->category_name }} </h1>

    <!-- Form -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('teams.storeMember', ['teamId' => $team->id, 'categoryId' => $category->category_id]) }}" method="POST">
            @csrf

            <!-- Member Name -->
            <div class="mb-6">
                <label for="member_name" class="block text-sm font-semibold text-gray-700">Member Name</label>
                <input type="text" name="member_name" id="member_name" 
                    class="mt-2 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
            </div>

            <!-- Gender -->
            <div class="mb-6">
                <label for="gender" class="block text-sm font-semibold text-gray-700">Gender</label>
                <select name="gender" id="gender" 
                    class="mt-2 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Birth Date -->
            <div class="mb-6">
                <label for="birth_date" class="block text-sm font-semibold text-gray-700">Birth Date</label>
                <input type="date" name="birth_date" id="birth_date" 
                    class="mt-2 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
            </div>

            <!-- Position -->
            <div class="mb-6">
                <label for="position" class="block text-sm font-semibold text-gray-700">Position</label>
                <input type="text" name="position" id="position" 
                    class="mt-2 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg">
                    Add Member
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
