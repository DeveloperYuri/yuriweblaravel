<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardControllerBaru extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->is_role == 2) {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('authbaru.loginmultiauth.superadmin.dashboard', $data);
        } else if (Auth::user()->is_role == 1) {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('authbaru.loginmultiauth.admin.dashboard', $data);
        }
    }
}
