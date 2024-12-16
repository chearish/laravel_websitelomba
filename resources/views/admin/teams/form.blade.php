@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content')
<div class="container mx-auto mt-10 p-8">
    <h1 class="text-3xl font-bold">Add Member</h1><br>

    {{-- <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">
            {{ isset($member) ? 'Edit' : 'Add' }} Member
        </h1>
    </div> --}}

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ isset($member) ? route('admin.members.update', [$team->id, $member->member_id]) : route('admin.members.store', $team->id) }}" method="POST">
            @csrf
            @if(isset($member))
                @method('PUT')
            @endif

            <!-- Member Name -->
            <div class="mb-6">
                <label for="member_name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" id="member_name" name="member_name" 
                    value="{{ isset($member) ? $member->member_name : old('member_name') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('member_name') border-red-500 @enderror">
                @error('member_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Gender -->
            <div class="mb-6">
                <label for="gender" class="block text-gray-700 font-medium mb-2">Gender</label>
                <select id="gender" name="gender" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('gender') border-red-500 @enderror">
                    <option value="male" {{ (isset($member) && $member->gender == 'male') ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ (isset($member) && $member->gender == 'female') ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Birth Date -->
            <div class="mb-6">
                <label for="birth_date" class="block text-gray-700 font-medium mb-2">Birth Date</label>
                <input type="date" id="birth_date" name="birth_date" 
                    value="{{ isset($member) ? $member->birth_date : old('birth_date') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('birth_date') border-red-500 @enderror">
                @error('birth_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Position -->
            <div class="mb-6">
                <label for="position" class="block text-gray-700 font-medium mb-2">Position</label>
                <select id="position" name="position" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('position') border-red-500 @enderror">
                    <option value="singer" {{ (isset($member) && $member->position == 'singer') ? 'selected' : '' }}>Singer</option>
                    <option value="musician" {{ (isset($member) && $member->position == 'musician') ? 'selected' : '' }}>Musician</option>
                    <option value="accompanist" {{ (isset($member) && $member->position == 'accompanist') ? 'selected' : '' }}>Accompanist</option>
                </select>
            
                @error('position')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            

            <!-- Buttons -->
            <div class="flex justify-end space-x-4">
                <a href="{{ route('admin.members.show', $team->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    {{ isset($member) ? 'Update' : 'Save' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
