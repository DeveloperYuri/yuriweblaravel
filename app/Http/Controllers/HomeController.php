<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ProdukBaru;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Stevebauman\Location\Facades\Location;


class HomeController extends Controller
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
            return view('homepage.index', compact('artikels'));
        } else {
            //get all products
            $artikels = Artikel::latest()->paginate(3);

            //render view with products
            return view('homepage.indexsg', compact('artikels'));
        }
    }

    public function show(string $id): View
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //render view with product
        return view('homepage.show', compact('artikels'));
    }

    public function tentangKami(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('tentangkami.index');
        } else {
            return view('tentangkami.indexsg');
        }
    }

    public function brands(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('brands.index');
        } else {
            return view('brands.indexsg');
        }
    }

    public function produkBaru(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $produkbaru = ProdukBaru::all();

            return view('produkbaru.index', compact('produkbaru'));
        } else {
            $produkbaru = ProdukBaru::all();

            return view('produkbaru.indexsg', compact('produkbaru'));
        }
    }

    public function kontak(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('kontak.index');
        } else {
            return view('kontak.indexsg');
        }
    }

    public function distributor(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('distributor.index');
        } else {
            return view('distributor.indexsg');
        }
    }

    public function householdcleaner()
    {
        return view('brands.householdcleaner');
    }

    public function childrentoilet()
    {
        return view('brands.childrentoilet');
    }

    public function babytoilet()
    {
        return view('brands.babytoilet');
    }

    public function adulttoilet()
    {
        return view('brands.adulttoilet');
    }

    public function aganolproduk()
    {
        return view('brands.produkaganol');
    }

    public function babysoftproduk()
    {
        return view('brands.produkbabysoft');
    }

    public function biosoftdetergenproduk()
    {
        return view('brands.produkbiosoftdetergen');
    }

    public function biosoftproduk()
    {
        return view('brands.produkbiosoft');
    }

    public function bathroomcleanerproduk()
    {
        return view('brands.produkbathroomcleaner');
    }

    public function yuribleachproduk()
    {
        return view('brands.produkyuribleach');
    }

    public function fabriccareproduk()
    {
        return view('brands.produkfabriccare');
    }

    public function glasscleanerproduk()
    {
        return view('brands.produkglasscleaner');
    }

    public function handgelproduk()
    {
        return view('brands.produkhandgel');
    }

    public function handsoapproduk()
    {
        return view('brands.produkhandsoap');
    }

    public function ligentproduk()
    {
        return view('brands.produkligent');
    }

    public function ligentbabyproduk()
    {
        return view('brands.produkligentbaby');
    }

    public function lysorinproduk()
    {
        return view('brands.produklysorin');
    }

    public function yurisoftproduk()
    {
        return view('brands.produkyurisoft');
    }

    public function porstexproduk()
    {
        return view('brands.produkporstex');
    }

    public function porstexregulerproduk()
    {
        return view('brands.produkporstexreguler');
    }

    public function porstexklosetproduk()
    {
        return view('brands.produkporstexkloset');
    }

    public function yurisolproduk()
    {
        return view('brands.produkyurisol');
    }

    public function tafproduk()
    {
        return view('brands.produktaf');
    }

    public function yurimaticproduk()
    {
        return view('brands.produkyurimatic');
    }

    public function trilproduk()
    {
        return view('brands.produktril');
    }

    public function laundrydisinfektantproduk()
    {
        return view('brands.produklaundrydisinfektant');
    }
    public function disinfektantsprayproduk()
    {
        return view('brands.produkdisinfektantspray');
    }
    public function handmoisturizerproduk()
    {
        return view('brands.produkhandmoisturizer');
    }

    public function faq(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('faq.index');
        } else {
            return view('faq.indexsg');
        }
    }
}
