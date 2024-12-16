@extends('base')



@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content') 
<div class="container mx-auto mt-10 p-8">
    <div class="flex items-center space-x-4 mb-6">
        <!-- <h1 class="text-3xl font-bold"> Halo {{ Auth::user()->name }}!!</h1> -->
        <h1 class="text-3xl font-bold">REGISTERED TEAM</h1>
    </div>
    
    <p class="font-semibold text-lg mb-4">Total Registered Team:  {{ $registrations->count() }} </p>
    <div class="bg-white shadow-md rounded-lg p-8 overflow-x-auto">
        <table class="min-w-full text-sm text-left border border-gray-200" id="events-table">
            <thead class="bg-gray-200 text-gray-700 uppercase font-medium">
                <tr>
                <th class="px-6 py-4 border-b">Choir Name</th>
                    <th class="px-6 py-4 border-b">Category</th>
                    <th class="px-6 py-4 border-b">Registration Date</th>
                    <th class="px-6 py-4 border-b">Payment Proof</th>
                    <th class="px-6 py-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($registrations as $registration)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 border-b text-gray-600">{{ $registration->team->team_name }}</td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $registration->category->category_name }}</td>
                    <td class="px-6 py-4 border-b text-gray-600">{{ $registration->registration_date }}</td>
                    <td class="px-6 py-4 border-b">
                    @if(in_array(pathinfo($registration->payment_proof, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                        <img src="{{ Storage::url($registration->payment_proof) }}" alt="Payment Proof" style="max-width: 300px;">
                    @else
                        <a href="{{ Storage::url($registration->payment_proof) }}" target="_blank">Download Payment Proof</a>
                    @endif
                    </td>
                    <td class="px-6 py-4 border-b text-gray-600">
                        <form action="{{ route('admin.verify-team', ['id' => $registration->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded text-sm">
                                ✅ Verify
                            </button>
                        </form>
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



