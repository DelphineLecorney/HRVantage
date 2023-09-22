<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    // 'index' method: Displays the employees.
    public function index()
    {
        $employees = Employee::all();

        return view('employee', compact('employees'));
    }
}
