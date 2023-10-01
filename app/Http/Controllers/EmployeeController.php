<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // 'index' method: Displays the employees.
    public function index()
    {
        $employees = Employee::all();

        return view('employee', compact('employees'));
    }

    // 'create' method: Displays the create form.
    public function create()
    {
        return view('createEmployee');
    }

    // 'store' method: Creates a new employee.
    public function store(Request $request)
    {
        Employee::create($request->all());

        return redirect()->route('employee')->with('success', 'The employee has been registered successfully.');
    }
}
