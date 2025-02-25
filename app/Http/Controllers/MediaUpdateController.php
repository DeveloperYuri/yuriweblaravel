<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\View\View;

class MediaUpdateController extends Controller
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
            return view('frontend.media.index', compact('artikels'));
        } else {
            //get all products
            $artikels = Artikel::latest()->paginate(9);

            //render view with products
            return view('frontend.media.indexsg', compact('artikels'));
        }
    }
}
