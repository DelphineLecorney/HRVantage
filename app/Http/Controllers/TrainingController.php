<?php

namespace App\Http\Controllers;

use App\Models\Training;

class TrainingController extends Controller
{
    // 'index' method: Displays the trainings.
    public function index()
    {
        $trainings = Training::all();
        return view('trainings.index', compact('trainings'));
    }
}