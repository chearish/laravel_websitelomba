<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Category;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function select()
    {
        dd('Hello');

        // Fetch all available categories
        $categories = Category::all();
        
        logger('Select method called');

        if (!session()->has(['team_name', 'total_member', 'description'])) {
            return redirect()->route('teams.create')->with('error', 'Please complete team registration first.');
        }
        
        // Return the view to register for categories
        return view('user.register', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate selected categories
        $request->validate([
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ]);

        // Retrieve the team data from the session
        $teamData = session()->only(['team_name', 'total_member', 'description']);
        
        // Create the team in the database
        $team = Team::create([
            'team_name' => $teamData['team_name'],
            'total_member' => $teamData['total_member'],
            'description' => $teamData['description'],
            'status_pendaftaran' => 'pending', // Set default status
            'user_id' => auth()->id(), // Assuming user is authenticated
        ]);

        // Attach selected categories to the team
        $team->categories()->sync($request->categories);

        // Clear session data
        session()->forget(['team_name', 'total_member', 'description']);

        
        // Redirect back to the home page or success page
        return redirect()->route('user.home')->with('success', 'Team and Categories Registered Successfully!');
    }

    public function save(Request $request)
    {
        logger('Saving team data...', $request->all());

        // Validate the input
        $request->validate([
            'team_name' => 'required|string|max:255',
            'total_member' => 'required|integer|min:1',
            'description' => 'nullable|string|max:500',
        ]);

        // Store the team data in the session temporarily
        session([
            'team_name' => $request->team_name,
            'total_member' => $request->total_member,
            'description' => $request->description,
        ]);

        logger('Team data saved to session', session()->all());


        // Redirect to the categories registration page
        return redirect()->route('categories.select');

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
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
