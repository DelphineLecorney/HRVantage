<?php

namespace App\Http\Controllers;

use App\Models\Termination;

class TerminationController extends Controller
{
    // 'index' method: Displays the terminations.
    public function index()
    {
        $terminations = Termination::all();
        return view('terminations.index', compact('terminations'));
    }
}