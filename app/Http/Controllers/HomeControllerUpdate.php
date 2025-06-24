<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ArtikelBaru;
use App\Models\EventModel;
use App\Models\MediaModel;
use App\Models\ProdukBaru;
use App\Models\ProdukbaruModel;
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

    public function artikel(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $artikelbaru = ArtikelBaru::latest()->paginate(9);
            return view('frontend.artikel.index', compact('artikelbaru'));
        } else {
            $artikelbaru = ArtikelBaru::latest()->paginate(9);
            return view('artikelbaru.index', compact('artikelbaru'));
            return view('frontend.artikel.indexsg');
        }
    }

    public function media(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {

            $media = MediaModel::latest()->paginate(9);
            return view('frontend.media.index', compact('media'));

        } else {

            $media = MediaModel::latest()->paginate(9);
            return view('frontend.media.index', compact('media'));

        }
    }

    public function produkBaru(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $produkbaru = ProdukbaruModel::all();

            return view('frontend.produkbaru.index', compact('produkbaru'));
        } else {
            $produkbaru = ProdukbaruModel::all();

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

    public function event(Request $request)
    {
        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {

            $events = EventModel::all();
            return view('frontend.event.index', compact('events'));

        } else {

            $events = EventModel::all();
            return view('frontend.event.index', compact('events'));

        }
    }


    // Brands 
    public function householdcleaner()
    {
        return view('frontend.brands.householdcleaner');
    }

    public function childrentoilet()
    {
        return view('frontend.brands.childrentoilet');
    }

    public function babytoilet()
    {
        return view('frontend.brands.babytoilet');
    }

    public function adulttoilet()
    {
        return view('frontend.brands.adulttoilet');
    }

    public function aganolproduk()
    {
        return view('frontend.brands.produkaganol');
    }

    public function babysoftproduk()
    {
        return view('frontend.brands.produkbabysoft');
    }

    public function biosoftdetergenproduk()
    {
        return view('frontend.brands.produkbiosoftdetergen');
    }

    public function biosoftproduk()
    {
        return view('frontend.brands.produkbiosoft');
    }

    public function bathroomcleanerproduk()
    {
        return view('frontend.brands.produkbathroomcleaner');
    }

    public function yuribleachproduk()
    {
        return view('frontend.brands.produkyuribleach');
    }

    public function fabriccareproduk()
    {
        return view('frontend.brands.produkfabriccare');
    }

    public function glasscleanerproduk()
    {
        return view('frontend.brands.produkglasscleaner');
    }

    public function handgelproduk()
    {
        return view('frontend.brands.produkhandgel');
    }

    public function handsoapproduk()
    {
        return view('frontend.brands.produkhandsoap');
    }

    public function ligentproduk()
    {
        return view('frontend.brands.produkligent');
    }

    public function ligentbabyproduk()
    {
        return view('frontend.brands.produkligentbaby');
    }

    public function lysorinproduk()
    {
        return view('frontend.brands.produklysorin');
    }

    public function yurisoftproduk()
    {
        return view('frontend.brands.produkyurisoft');
    }

    public function porstexproduk()
    {
        return view('frontend.brands.produkporstex');
    }

     public function porstexregulerproduk()
    {
        return view('frontend.brands.produkporstexreguler');
    }

    public function porstexklosetproduk()
    {
        return view('frontend.brands.produkporstexkloset');
    }

    public function yurisolproduk()
    {
        return view('frontend.brands.produkyurisol');
    }

    public function tafproduk()
    {
        return view('frontend.brands.produktaf');
    }

    public function yurimaticproduk()
    {
        return view('frontend.brands.produkyurimatic');
    }

    public function trilproduk()
    {
        return view('frontend.brands.produktril');
    }

    public function laundrydisinfektantproduk()
    {
        return view('frontend.brands.produklaundrydisinfektant');
    }
    public function disinfektantsprayproduk()
    {
        return view('frontend.brands.produkdisinfektantspray');
    }
    public function handmoisturizerproduk()
    {
        return view('frontend.brands.produkhandmoisturizer');
    }

    public function faq(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('frontend.faq.index');
        } else {
            return view('frontend.faq.indexsg');
        }
    }
}
