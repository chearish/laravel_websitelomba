<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showMembers($team_id)
    {
        $team = Team::findOrFail($team_id);
        $members = $team->members;

        return view('admin.teams.members', compact('team', 'members'));
    }


    public function create($team_id)
    {
        $team = Team::findOrFail($team_id);
        return view('admin.teams.form', compact('team'));
    }
    
    public function store(Request $request, $team_id)
    {
        $request->validate([
            'member_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'position' => 'required|string|max:255',
        ]);
    
        $team = Team::findOrFail($team_id);
    
        Member::create([
            'member_name' => $request->member_name,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'position' => $request->position,
            'team_id' => $team->id,
        ]);
    
        return redirect()->route('admin.members.show', $team_id)->with('success', 'Member added successfully');
    }
    
    public function edit($team_id, $id)
    {
        $team = Team::findOrFail($team_id);
        $member = Member::findOrFail($id);
    
        return view('admin.teams.form', compact('team', 'member'));
    }
    
    public function update(Request $request, $team_id, $id)
    {
        $request->validate([
            'member_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'position' => 'required|string|max:255',
        ]);
    
        $team = Team::findOrFail($team_id);
        $member = Member::findOrFail($id);
    
        $member->update([
            'member_name' => $request->member_name,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'position' => $request->position,
        ]);
    
        return redirect()->route('admin.members.show', $team_id)->with('success', 'Member updated successfully');
    }

    public function destroy($team_id, $id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('admin.members.show', $team_id)
                        ->with('success', 'Member deleted successfully!');
    }

    
}
