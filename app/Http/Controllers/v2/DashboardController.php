<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        return view('backenddashboard.dashboard.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
