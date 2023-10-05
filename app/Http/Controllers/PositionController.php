<?php

namespace App\Http\Controllers;

use App\Models\Position;

class PositionController extends Controller
{
    // 'index' method: Displays the positions.
    public function index()
    {
        $positions = Position::all();

        return view('position.position', compact('positions'));
    }

    // 'create' method: Displays the form to create a new position.
    public function create()
    {
        return view('position.createPosition', compact('positions'));
    }
}
