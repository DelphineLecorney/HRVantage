<?php

namespace App\Http\Controllers;

use App\Models\Position;

class PositionController extends Controller
{
    // 'index' method: Displays the positions.
    public function index()
    {
        $positions = Position::all();

        return view('position', compact('positions'));
    }
}
