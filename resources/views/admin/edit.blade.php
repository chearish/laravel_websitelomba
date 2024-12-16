@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
@endsection

@section('content')
<div class="container mx-auto mt-10 p-8">
    <div class="flex items-center space-x-4 mb-6">
        <h1 class="text-3xl font-bold">Edit Registration</h1>
    </div>

    <form action="{{ route('admin.registered.update', $registration->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Team Name -->
            <div>
                <label for="team_name" class="block font-medium text-gray-700">Team Name</label>
                <input 
                    type="text" 
                    name="team_name" 
                    id="team_name" 
                    value="{{ old('team_name', $registration->team->team_name) }}" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2"
                >
                @error('team_name')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block font-medium text-gray-700">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    value="{{ old('email', $registration->team->user->email) }}" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2"
                >
                @error('email')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Description -->
            <div class="col-span-1 md:col-span-2">
                <label for="description" class="block font-medium text-gray-700">Short Biography</label>
                <textarea 
                    name="description" 
                    id="description" 
                    rows="4" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2">{{ old('description', $registration->team->description) }}</textarea>
                @error('description')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Total Members -->
            <div>
                <label for="total_member" class="block font-medium text-gray-700">Total Members</label>
                <input 
                    type="number" 
                    name="total_member" 
                    id="total_member" 
                    value="{{ old('total_member', $registration->team->total_member) }}" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2"
                >
                @error('total_member')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Category -->
            <div>
                <label for="category_id" class="block font-medium text-gray-700">Category</label>
                <select 
                    name="category_id" 
                    id="category_id" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2"
                >
                    @foreach($categories as $category)
                        <option value="{{ $category->category_id }}" @if(old('category_id', $registration->category->category_id) == $category->category_id) selected @endif>
                            {{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mt-8 flex justify-between">
            <a href="{{ route('admin.home') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-md">Cancel</a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-md">Save Changes</button>
        </div>
    </form>
</div>
@endsection

@section('library-js')
    <script>
        // Additional JS if necessary
    </script>
@endsection
