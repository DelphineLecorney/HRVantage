<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Requests\PositionRequest;

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

    // 'store' method: Creates a new position.
    public function store(PositionRequest $request)
    {
        Position::create($request->validated());

        return redirect()->route('position')->with('success', 'The position has been registered successfully.');
    }

    // 'edit' method: Displays the form to edit a position.
    public function edit($id)
    {
        $position = Position::find($id);
        return view('position.editPosition', compact('position'));
    }

    // 'update' method: Updates the position.
    public function update(PositionRequest $request, $id)
    {
        $position = Position::find($id);

        $position->update($request->validated());

        return redirect()->route('position')->with('success', 'The position has been updated successfully.');
    }

    // 'destroy' method: Deletes the position.
    public function destroy($id)
    {
        $position = Position::find($id);
        $position->delete();

        return redirect()->route('position')->with('success', 'The position has been deleted successfully.');
    }
}
