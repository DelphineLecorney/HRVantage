<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\Recruitment;

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

    public function countDistinctOpenPositions()
    {
        // 'distinctOpenPositionsCount' variable: Counts the number of distinct open positions.
        $distinctOpenPositionsCount = Recruitment::distinct()->count('position_id');
        return response()->json(['Number of distinct open positions' => $distinctOpenPositionsCount]);
    }

    // 'getRecruitmentInProgress' method: Returns the number of recruitments in progress.
    public function getRecruitmentInProgress()
    {
        $recruitmentInProgress = Recruitment::where('status', 'pending')->count();

        return response()->json([
            'Number of recruitment in progress' => $recruitmentInProgress,
        ]);
    }

    // 'getRecruitmentApproved' method: Returns the number of recruitments approved.
    public function getRecruitmentApproved()
    {
        $recruitmentApproved = Recruitment::where('status', 'approved')->count();

        return response()->json([
            'Number of recruitment approved' => $recruitmentApproved,
        ]);
    }
}
