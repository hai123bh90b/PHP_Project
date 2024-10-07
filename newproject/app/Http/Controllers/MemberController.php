<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;


class MemberController extends Controller
{
    
    function oneToOne()
    {
        $groups = Member::find(1)->groupData; 
        return view('one', compact('groups')); 
    }
    
   
    function manyRelation()
    {
        $groups = Member::find(1)->groupManyData; 
        return view('two', compact('groups'));
    }
    
    

    function ManyToOne()
    {
        $groups = Group::with('member')->get();
        return view('three', compact('groups'));
    }

    public function index()
    {
        $members = Member::with('groupData')->get();

        return view('members.index', compact('members'));
    }



    public function create()
    {
        return view('members.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
        ]);

        Member::create($request->all());

        return redirect()->route('members.index')->with('success', 'Member added successfully!');
    }
    
}
