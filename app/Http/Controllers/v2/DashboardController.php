<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backenddashboard.dashboard.index');
    }
}
