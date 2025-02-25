<?php

namespace App\Http\Controllers;

use App\Models\ArtikelBaru;
use Illuminate\Http\Request;

class ArtikelUpdateController extends Controller
{
    public function index()
    {

        $artikelbaru = ArtikelBaru::latest()->paginate(9);

        //render view with products
        return view('frontend.artikel.index', compact('artikelbaru'));
    }
}
