<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;


class GroupController extends Controller
{

    public function create()
    {

        $members = Member::all();
        return view('groups.create', compact('members'));
    }

public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'member_id' => 'required|exists:members,id',
    ]);

    Group::create($request->all());
    return redirect()->route('members.index')->with('success', 'Group added successfully!');
}

}
