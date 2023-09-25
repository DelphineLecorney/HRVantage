<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;

class RecruitmentController extends Controller
{
    // 'index' method: Displays the recruitments.
    public function index()
    {
        $recruitment = Recruitment::all();
        return view('recruitment', ['recruitment' => $recruitment]);
    }

    public function showRecruitmentDetails($id)
    {
        $recruitment = Recruitment::find($id);

        if ($recruitment) {
            return view('recruitment.id', ['recruitment' => $recruitment]);
        } else {
            return response([
                'message' => 'recruitment not found'
            ], 404);
        }
    }
}
