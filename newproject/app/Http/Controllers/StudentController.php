<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) 
        {
            $students = Student::where('id', 'like', '%' . $search . '%')
                                ->orWhere('name', 'like', '%' . $search . '%')
                                ->orWhere('email', 'like', '%' . $search . '%')
                                ->orWhere('regno', 'like', '%' . $search . '%')
                                ->orWhere('course', 'like', '%' . $search . '%')
                                ->get();
        } 
        
        else 
        {
            
            $students = Student::all();
        }

        return view('student.index', compact('students'));  
    

    }

    public function showStudents(Request $request)
    {
    
        $students = Student::all();

        return view('frontend.student-records', compact('students'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'regno' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) 
        {

            $imagePath = $request->file('image')->store('uploads/students', 'public');
        }

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'regno' => $request->regno,
            'course' => $request->course,
            'image' =>$imagePath,
        ]);

        return redirect('/student')->with('status' , 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show' , compact('student'));
    }

    // public function showStudents()
    // {
    //     // Fetching students from the database
    //     $students = Student::all(); // Adjust this if you have specific conditions

    //     // Pass students to the view
    //     return view('frontend.studnts', compact('students'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'regno' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',


        ]);

        if ($request->hasFile('image')) 
        {
            $imagePath = $request->file('image')->store('uploads/students', 'public');
            $student->update(['image' => $imagePath]);
        }

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'regno' => $request->regno,
            'course' => $request->course,
        ]);

        return redirect('/student')->with('status' , 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('student')->with('status' ,'Student Deleted Successfully' );
    }
}
