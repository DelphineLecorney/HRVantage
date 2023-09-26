<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;

class RecruitmentController extends Controller
{

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    // 'index' method: Displays the recruitments.
    public function index()
    {
        $recruitments = Recruitment::all();
        return view('recruitment', compact('recruitments'));
    }
}
