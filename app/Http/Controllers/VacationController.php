<?php

namespace App\Http\Controllers;

use App\Models\Vacation;

class VacationController extends Controller
{
    // 'index' method: Displays the vacations.
    public function index()
    {
        $vacations = Vacation::all();
        return view('vacations.index', compact('vacations'));
    }
}