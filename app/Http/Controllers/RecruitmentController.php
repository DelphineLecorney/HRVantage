<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecruitmentRequest;
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
        return view('recruitment.recruitment', compact('recruitments'));
    }

    // 'create' method: Displays the create form.
    public function create()
    {
        $positions = Position::all();
        return view('recruitment.createRecruitment', compact('positions'));
    }

    // 'store' method: Creates a new recruitment.
    public function store(RecruitmentRequest $request)
    {
        Recruitment::create($request->validated());
        return redirect()->route('recruitment.index');
    }

    // 'edit' method: Displays the edit form.
    public function edit(Recruitment $recruitment)
    {
        return view('recruitment', compact('recruitment', 'positions'));
    }

    // 'update' method: Updates a recruitment.
    public function update(RecruitmentRequest $request, Recruitment $recruitment)
    {
        $recruitment->update($request->validated());
        return redirect()->route('recruitment.index');
    }

    // 'destroy' method: Deletes a recruitment.
    public function destroy(Recruitment $recruitment)
    {
        $recruitment->delete();

        return redirect()->route('recruitment');
    }
}
