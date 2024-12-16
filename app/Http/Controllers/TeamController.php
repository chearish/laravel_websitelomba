<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Member;
use App\Models\Category;
use App\Models\Registration;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function create()
    {
        $categories = Category::all();
        return view('user.createTeam', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'team_name' => 'required|string|max:255',
            'total_member' => 'required|integer|min:1',
            'description' => 'nullable|string|max:500',
            'categories' => 'required|array|min:1|max:3', // Minimal 1 kategori, maksimal 3
            'categories.*' => 'exists:categories,category_id', // Validasi kategori yang dipilih
            'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // File bukti pembayaran
        ]);

        // Upload file bukti pembayaran
        $paymentProofPath = $request->file('payment_proof')->store('public/payment_proofs');

        // Buat tim baru
        $team = Team::create([
            'team_name' => $validated['team_name'],
            'total_member' => $validated['total_member'],
            'description' => $validated['description'],
            'status_pendaftaran' => 'pending', // Default status
            'user_id' => auth()->id(), // Menyertakan user_id dari pengguna yang login

        ]);

        // Simpan ke tabel pivot 'registration' (dengan payment_proof untuk tiap kategori)
        foreach ($validated['categories'] as $categoryId) {
            Registration::create([
                'team_id' => $team->id,
                'category_id' => $categoryId,
                'payment_proof' => $paymentProofPath,
                'registration_status' => 'pending',
                'registration_date' => now(), // Tanggal pendaftaran saat ini

            ]);
        }

        return redirect()->route('user.home')->with('success', 'Team and Categories Registered Successfully!');
    }



    public function show($teamId, $categoryId)
    {
        $team = Team::with('members')->findOrFail($teamId);
        $category = Category::findOrFail($categoryId);

        // Ambil status registrasi dari pivot table
        $registrationStatus = $category->teams()
            ->where('team_id', $teamId)
            ->first()
            ->pivot
            ->registration_status;

        return view('user.showTeam', compact('team', 'category', 'registrationStatus'));
    }

    public function showAddMemberForm($teamId, $categoryId)
    {
            // Ambil data tim dan kategori berdasarkan ID
        $team = Team::findOrFail($teamId);
        $category = Category::findOrFail($categoryId);

        // Ambil status registrasi dari pivot table
        $registrationStatus = $category->teams()
            ->where('team_id', $teamId)
            ->first()
            ->pivot
            ->registration_status;

        // Periksa status registrasi
        if ($registrationStatus !== 'Verified') {
            return redirect()->route('teams.showTeam', [$teamId, $categoryId])
                ->with('error', 'Registration is not verified yet.');
        }

        return view('user.addMember', compact('team', 'category'));
    }

    
    public function showMembersByCategory($teamId, $categoryId)
    {
        $team = Team::with(['categories' => function ($query) use ($categoryId) {
            $query->where('categories.category_id', $categoryId);  // Explicitly define the table for category_id
        }, 'members'])->findOrFail($teamId);
    
        $category = Category::findOrFail($categoryId);

        // Ambil status registrasi dari pivot table
        $registrationStatus = $category->teams()
            ->where('team_id', $teamId)
            ->first()
            ->pivot
            ->registration_status;

        return view('user.showTeam', compact('team', 'category', 'registrationStatus'));
    
    }

    public function storeMember(Request $request, $teamId, $categoryId)
    {
        // Validate the member data
        $validated = $request->validate([
            'member_name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',   // Assuming gender is a string (adjust the validation as needed)
            'birth_date' => 'required|date',        // Assuming birth_date is a date type
            'position' => 'required|string|max:100',// Assuming position is a string (adjust the validation as needed)

        ]);

        // Find the team and category to associate the member with
        $team = Team::findOrFail($teamId);
        $category = Category::findOrFail($categoryId);

        // Create a new member and associate with the team and category
        $member = $team->members()->create([
            'member_name' => $validated['member_name'],
            'gender' => $validated['gender'],
            'birth_date' => $validated['birth_date'],
            'position' => $validated['position'],
            'team_id' => $team->id,   
        ]);


        return redirect()->route('teams.show', [$teamId, $categoryId])
            ->with('success', 'Member added successfully');
    }

    public function addMember(Request $request, $teamId, $categoryId)
    {
        // Validate the member data (name, email, etc.)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
        ]);

        // Add member to the category (assuming you have a Member model and member relationship)
        $category = Category::findOrFail($categoryId);
        $category->members()->create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('teams.show', $teamId)->with('success', 'Member added successfully');
    }

    // public function addMemberForm($teamId, $categoryId)
    // {
    //     // Fetch the team and the category
    //     $team = Team::findOrFail($teamId);
    //     $category = Category::findOrFail($categoryId);

    //     // Return a view with the form to add a member
    //     return view('user.addMember', compact('team', 'category'));
    // }

    // public function storeMember(Request $request, $teamId, $categoryId)
    // {
    //     // Validate the member's data
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'status' => 'required|string|max:50',  // Adjust as needed
    //     ]);

    //     // Add the member to the category
    //     $category = Category::findOrFail($categoryId);

    //     // Assuming you have a Member model that is related to categories
    //     $category->members()->create([
    //         'name' => $request->name,
    //         'status' => $request->status,  // Adjust according to your logic
    //     ]);

    //     // Redirect back to the team details page with a success message
    //     return redirect()->route('teams.show', $teamId)->with('success', 'Member added successfully!');
    // }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
