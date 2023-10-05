<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Position;

class EmployeeController extends Controller
{
    // 'index' method: Displays the employees.
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    // 'index' method: Displays the employees.
    public function index()
    {
        $employees = Employee::all();
        return view('employee.employee', compact('employees'));
    }

    // 'create' method: Displays the create form.
    public function create()
    {
        $positions = Position::all();
        return view('employee.createEmployee', compact('positions'));
    }

    // 'store' method: Creates a new employee.
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated());

        return redirect()->route('employee')->with('success', 'The employee has been registered successfully.');
    }

    // 'edit' method: Displays the edit form.
    public function edit(Employee $employee)
    {
        $employees = Employee::all();
        return view('employee.editEmployee', compact('employee', 'employees'));
    }

    // 'update' method: Updates the employee.
    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::find($id);

        $employee->update($request->validated());

        return redirect()->route('employee')->with('success', 'The employee has been updated successfully.');
    }

    // 'destroy' method: Deletes the employee.
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employee')->with('success', 'The employee has been deleted successfully.');
    }
}
