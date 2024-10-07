<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function export()
    {
        return Excel::download(new EmployeeExport, 'employees.csv');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls',
        ]);

        Excel::import(new EmployeeImport, $request->file('file'));

        $employees = Employee::all();

        return redirect()->route('employees.list')->with('success', 'File Imported successfully');  

        // return redirect()->back()->with('success', 'File imported successfully');
    }

    public function showImportExportPage()
    {
        return view('employees.importExport');
    }


    public function showEmployeeList()
    {
        $employees = Employee::all();
        return view('employees.employeeList', compact('employees'));

    }
}
