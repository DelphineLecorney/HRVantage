<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Employee;


class DashboardController extends Controller
{
    // 'index' method: Displays the dashboard.
    public function index()
    {
        $user = Auth::user();

        return view('dashboard', compact('user'));
    }

    // 'getNumberOfEmployees' method: Returns the number of employees.
    public function getNumberOfEmployees()
    {
        $numberOfEmployees = Employee::count();
        return response()->json(['Number of employees' => $numberOfEmployees]);
    }
}
