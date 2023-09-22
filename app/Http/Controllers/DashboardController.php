<?php

namespace App\Http\Controllers;

use App\Models\Employee;


class DashboardController extends Controller
{
    // 'index' method: Displays the dashboard.
    public function index()
    {
        return view('dashboard');
    }

    public function getNumberOfEmployees()
    {
        $numberOfEmployees = Employee::count();
        return response()->json(['Number of employees' => $numberOfEmployees]);
    }
}
