<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    // 'index' method: Displays the dashboard.
    public function index()
    {
        return view('dashboard');
    }

    // 'logout' method: Logs the user out.
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    
}
