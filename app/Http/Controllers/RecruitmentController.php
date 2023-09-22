<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;

class RecruitmentController extends Controller
{
    // 'index' method: Displays the recruitments.
    public function index()
    {
        $recruitments = Recruitment::all();
        return view('recruitments.index', compact('recruitments'));
    }
}