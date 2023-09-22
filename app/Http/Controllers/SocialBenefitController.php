<?php

namespace App\Http\Controllers;

use App\Models\SocialBenefit;

class SocialBenefitController extends Controller
{
    // 'index' method: Displays the social benefits.
    public function index()
    {
        $socialBenefits = SocialBenefit::all();
        return view('socialBenefits.index', compact('socialBenefits'));
    }
}