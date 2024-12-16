@extends('base')

@section('library-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endsection

@section('content')
<div class="container mx-auto mt-10 p-8">
    <h1 class="text-3xl font-bold">Register a New Team</h1><br>
    
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('teams.store') }}" method="POST" class="mt-6" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="team_name" class="block text-gray-700 font-bold">Team Name:</label>
                <input type="text" name="team_name" id="team_name" 
                    class="w-full border border-gray-300 rounded px-3 py-2" 
                    required>
            </div>
            <div class="mb-6">
                <label for="total_member" class="block text-gray-700 font-bold">Total Members:</label>
                <input type="number" name="total_member" id="total_member" 
                    class="w-full border border-gray-300 rounded px-3 py-2" 
                    min="1" required>
            </div>
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-bold">Short Description:</label>
                <textarea name="description" id="description" 
                        class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
            </div>

            <div class="mb-4">
                <label for="categories" class="block text-gray-700 font-bold">Competition Category(s) of Choice <span class="text-red-500">*</span>:</label>
                <div class="flex flex-wrap gap-4">
                    <!-- Loop melalui kategori -->
                    @foreach($categories as $category)
                        <label class="flex items-center space-x-1">
                            <input type="checkbox" name="categories[]" value="{{ $category->category_id }}" 
                                {{ in_array($category->category_id, old('categories', [])) ? 'checked' : '' }}>
                            <span>{{ $category->category_name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="mb-6">
                <label for="paymentProof" class="block text-gray-700 font-bold">Payment Proof:</label>
                <input type="file" id="paymentProof" name="payment_proof" required>
                @error('payment_proof')<p style="color:red;">{{ $message }}</p>@enderror

                <!-- Preview for Payment Proof -->
                <img id="paymentProofPreview" src="#" alt="Payment Proof Preview" style="display: none; max-width: 100%; margin-top: 10px; border-radius: 4px;"/>

                <script>
                document.getElementById('paymentProof').addEventListener('change', function(event) {
                const file = event.target.files[0];
                const preview = document.getElementById('paymentProofPreview');

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block'; // Show preview image
                    };

                    reader.readAsDataURL(file); // Read the file as a data URL
                } else {
                    preview.style.display = 'none'; // Hide preview if no image
                }
                });
                </script>

                <!-- Note below payment proof -->
                <p class="mt-4 text-sm text-gray-600">
                <strong>Note:</strong> Please check the registration fee details before making the payment to ensure the amount is correct. Payment should be transferred to the following bank account:
                </p>
                <strong>Bank Name:</strong> Bank Central Aasia<br>
                <strong>Account Number:</strong> 123-456-789<br>
                <strong>Account Holder:</strong> Petra Cantare <br>
            </div>


            <div class="flex justify-center gap-2 mt-6">
                <button type="submit" onclick="return confirm('Are you sure you want to submit this record? Make sure the data is correct! ');"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    Register
                </button>

                <a href="{{ route('user.home') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    ← Back to Teams
                </a>

            </div>
            
        </form>
    </div>
</div>
@endsection
