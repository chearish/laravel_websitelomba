@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content')
<div class="container mx-auto mt-10 p-8">
    <h1 class="text-3xl font-bold">Add Category</h1><br>

    {{-- <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">
            {{ isset($category) ? 'Edit' : 'Add' }} Category
        </h1>
    </div> --}}

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ isset($category) ? route('categories.update', $category->category_id) : route('categories.store') }}" method="POST">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif

            <!-- Category Name -->
            <div class="mb-6">
                <label for="category_name" class="block text-gray-700 font-medium mb-2">Category Name</label>
                <input type="text" id="category_name" name="category_name" 
                    value="{{ isset($category) ? $category->category_name : old('category_name') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('category_name') border-red-500 @enderror">
                @error('category_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea id="description" name="description" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('description') border-red-500 @enderror"
                    rows="5">{{ isset($category) ? $category->description : old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4">
                <a href="{{ route('categories.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    {{ isset($category) ? 'Update' : 'Save' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
