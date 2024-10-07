<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'address' => 'required',
            'password' => 'required|confirmed',
        ]);


         $user = User::create($data);

         if($user)
         {
            return redirect()->route('login');
         }
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials))
        {    
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Your Email do not match our records',
        ]);

    }


    public function dashboardPage()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        else
        {
            return redirect()->route('login');   
        }
    }


    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function index()
    {

        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|in:admin,user', 
        ]);
        $user = User::find($id);

        if (!$user) {
            return response()->json(['status' => 'User not found']);
        }

        $user->update([
            'type' => $request->input('type'),
        ]);

        return response()->json(['status' => 'User role updated successfully']);

        // return redirect()->route('users.index')->with('status', 'User role updated successfully');
    }


}
