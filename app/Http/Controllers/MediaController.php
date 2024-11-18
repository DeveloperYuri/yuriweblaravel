<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function index(): View
    {
        //get all products
        $artikels = Artikel::latest()->paginate(9);

        //render view with products
        return view('media', compact('artikels'));
    }

    public function show(string $id): View
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //render view with product
        return view('media.show', compact('artikels'));
    }
}
