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

        return redirect()->route('welcome')->with('success', 'The application for employment has been registered successfully.');
    }

    // 'edit' method: Displays the edit form.
    public function edit(Recruitment $recruitment)
    {
        $positions = Position::all();
        return view('recruitment.editRecruitment', compact('recruitment', 'positions'));
    }

    // 'update' method: Updates the recruitment.
    public function update(RecruitmentRequest $request, $id)
    {
        $recruitment = Recruitment::find($id);

        $recruitment->update($request->validated());

        return redirect()->route('recruitment')->with('success', 'The application for employment has been updated successfully.');
    }

    // 'destroy' method: Deletes the recruitment.
    public function destroy($id)
    {
        $recruitment = Recruitment::find($id);
        $recruitment->delete();

        return redirect()->route('recruitment')->with('success', 'The application for employment has been deleted successfully.');
    }
}
