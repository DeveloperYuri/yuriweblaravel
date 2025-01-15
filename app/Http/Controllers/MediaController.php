<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Stevebauman\Location\Facades\Location;


class MediaController extends Controller
{
    public function index(Request $request): View
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            //get all products
            $artikels = Artikel::latest()->paginate(9);

            //render view with products
            return view('media.index', compact('artikels'));
        } else {
            //get all products
            $artikels = Artikel::latest()->paginate(9);

            //render view with products
            return view('media.indexsg', compact('artikels'));
        }
    }

    public function show(string $id): View
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //render view with product
        return view('media.show', compact('artikels'));
    }
}
