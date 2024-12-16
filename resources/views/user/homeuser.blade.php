@extends('base')


@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection


@section('content')
<div class="container mx-auto mt-10 p-8">
    <h1 class="text-3xl font-bold">Welcome, {{ auth()->user()->name }}!</h1>

    <!-- Button to Create Team -->
    <div class="my-6">
        <a href="{{ route('teams.create') }}" 
           class="bg-green-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            Regist Team
        </a>
    </div>
    
    <!-- Display Categories and Teams -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($categories as $category)
            @forelse ($category->teams as $team)
                <div class="card cursor-pointer border rounded-lg p-6 hover:bg-blue-50 transition-all"
                    onclick="window.location='{{ route('teams.showByCategory', ['teamId' => $team->id, 'categoryId' => $category->category_id]) }}';" role="link">
                    <div class="card-body">
                        <h5 class="card-title text-xl font-semibold">{{ $team->team_name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Total Members: {{ $team->total_member }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Category: {{ $category->category_name }}</h6>
                    </div>
                </div>
            @empty
            @endforelse
        @empty
        @endforelse
    </div>

    <br>
    
    
</div>
</div>


@endsection
