<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigurationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data['user'] = $user;

        return view('baru.backenddashboardupdate.configuration.index', $data);
    }
}
