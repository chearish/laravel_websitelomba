<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Category;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function admin()
{
        $teams = Team::all(); // Retrieve all teams
        return view('admin/verified', compact('teams'));

    }

    public function registeredTeams()
    {
        $registrations = Registration::where('registration_status', 'Pending')->with('team','category')->get();
        return view('admin/registered', compact('registrations'));
    }

    public function verifiedTeams(Request $request)
    {
        $categories = Category::all();
        $registrationsQuery = Registration::with(['team', 'category'])
            ->where('registration_status', 'Verified')
            ->orderBy('updated_at', 'desc'); 
        

        if ($request->has('category_id') && $request->category_id != '') {
            $registrationsQuery->where('category_id', $request->category_id);
        }

        $registrations = $registrationsQuery->get();
        return view('admin.verified', compact('registrations', 'categories'));    
    }

    public function verifyTeam($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->registration_status = 'Verified';
        $registration->save();

        return redirect()->route('admin.registered')->with('success', 'Team verified successfully!');
    }
    
    public function user()
    {
        $users = User::all(); 
        return view('user/homeuser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registration = Registration::with('team.user', 'category')->findOrFail($id);
        $categories = Category::all();
    
        return view('admin.edit', compact('registration', 'categories'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'team_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'nullable|string',
            'total_member' => 'required|integer|min:1',
            'category_id' => 'required|exists:categories,category_id',  // category_id is correct in the registration table
        ]);

        // Fetch the registration and load the related team and user
        $registration = Registration::with('team.user')->findOrFail($id);

        // Get the associated team
        $team = $registration->team;

        // Ensure the team exists
        if (!$team) {
            throw new \Exception('Team not found for this registration.');
        }

        // Update the team details using the correct primary key (id)
        $team->update([
            'team_name' => $request->team_name,
            'description' => $request->description,
            'total_member' => $request->total_member,
        ]);

        // Update the user's email associated with the team
        $team->user->update([
            'email' => $request->email,
        ]);

        // Update the category in the registration table
        $registration->update([
            'category_id' => $request->category_id,  // Update registration's category_id
        ]);

        return redirect()->route('admin.home')->with('success', 'Registration updated successfully.');

    }

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();
        return redirect()->route('admin.home')->with('success', 'Registration deleted successfully');    
    }
}
