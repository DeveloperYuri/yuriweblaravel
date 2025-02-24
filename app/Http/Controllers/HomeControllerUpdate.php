<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ProdukBaru;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Stevebauman\Location\Facades\Location;

class HomeControllerUpdate extends Controller
{
    public function index(Request $request): View
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        //dd($var_countryname);

        if ($var_countryname == "Indonesia") {
            //get all products
            $artikels = Artikel::latest()->paginate(3);

            //render view with products
            return view('frontend.homepage.index', compact('artikels'));
        } else {
            //get all products
            $artikels = Artikel::latest()->paginate(3);

            //render view with products
            return view('frontend.homepage.index', compact('artikels'));
        }
    }

    public function tentangKami(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('frontend.tentangkami.index');
        } else {
            return view('frontend.tentangkami.indexsg');
        }
    }

    public function brands(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('frontend.brands.index');
        } else {
            return view('frontend.brands.indexsg');
        }
    }

    public function produkBaru(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $produkbaru = ProdukBaru::all();

            return view('frontend.produkbaru.index', compact('produkbaru'));
        } else {
            $produkbaru = ProdukBaru::all();

            return view('frontend.produkbaru.indexsg', compact('produkbaru'));
        }
    }

    public function kontak(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('frontend.kontak.index');
        } else {
            return view('frontend.kontak.indexsg');
        }
    }

    public function distributor(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('frontend.distributor.index');
        } else {
            return view('frontend.distributor.indexsg');
        }
    }
}
