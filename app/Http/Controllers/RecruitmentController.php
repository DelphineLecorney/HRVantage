<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use App\Models\Position;

class RecruitmentController extends Controller
{
    // 'index' method: Displays the recruitments.
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

    // 'store' method: Creates a new recruitment.
    public function store()
    {
        Recruitment::create(request()->validate([
            'position_id' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]));

        return redirect()->route('recruitment');
    }

    // 'update' method: Updates a recruitment.
    public function update(Recruitment $recruitment)
    {
        $recruitment->update(request()->validate([
            'position_id' => 'required',
            'date' => 'required',
            'status' => 'required',
        ]));

        return redirect()->route('recruitment');
    }

    // 'destroy' method: Deletes a recruitment.
    public function destroy(Recruitment $recruitment)
    {
        $recruitment->delete();

        return redirect()->route('recruitment');
    }

    // 'edit' method: Displays the edit form.
    public function edit(Recruitment $recruitment)
    {
        $positions = Position::all();
        return view('recruitment', compact('recruitment', 'positions'));
    }
}
