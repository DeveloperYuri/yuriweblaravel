<?php

namespace App\Http\Controllers\baru;

use App\Http\Controllers\Controller;
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
            return view('baru.frontend.homepage.index', compact('artikels'));
        } else {
            //get all products
            $artikels = Artikel::latest()->paginate(3);

            //render view with products
            return view('baru.frontend.homepage.index', compact('artikels'));
        }
    }

    public function tentangKami(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.tentangkami.index');
        } else {
            return view('baru.frontend.tentangkami.indexsg');
        }
    }

    public function brands(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.brands.index');
        } else {
            return view('baru.frontend.brands.indexsg');
        }
    }

    public function artikel(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $artikelbaru = ArtikelBaru::latest()->paginate(9);
            return view('baru.frontend.artikel.index', compact('artikelbaru'));
        } else {
            $artikelbaru = ArtikelBaru::latest()->paginate(9);
            return view('artikelbaru.index', compact('artikelbaru'));
            return view('baru.frontend.artikel.indexsg');
        }
    }

    public function media(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {

            $media = MediaModel::latest()->paginate(9);
            return view('baru.frontend.media.index', compact('media'));

        } else {

            $media = MediaModel::latest()->paginate(9);
            return view('baru.frontend.media.index', compact('media'));

        }
    }

    public function produkBaru(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $produkbaru = ProdukbaruModel::all();

            return view('baru.frontend.produkbaru.index', compact('produkbaru'));
        } else {
            $produkbaru = ProdukbaruModel::all();

            return view('baru.frontend.produkbaru.indexsg', compact('produkbaru'));
        }
    }

    public function kontak(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.kontak.index');
        } else {
            return view('baru.frontend.kontak.indexsg');
        }
    }

    public function distributor(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.distributor.index');
        } else {
            return view('baru.frontend.distributor.indexsg');
        }
    }

    public function event(Request $request)
    {
        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {

            $events = EventModel::all();
            return view('baru.frontend.event.index', compact('events'));

        } else {

            $events = EventModel::all();
            return view('baru.frontend.event.index', compact('events'));

        }
    }


    // Brands 
    public function householdcleaner()
    {
        return view('baru.frontend.brands.householdcleaner');
    }

    public function childrentoilet()
    {
        return view('baru.frontend.brands.childrentoilet');
    }

    public function babytoilet()
    {
        return view('baru.frontend.brands.babytoilet');
    }

    public function adulttoilet()
    {
        return view('baru.frontend.brands.adulttoilet');
    }

    public function aganolproduk()
    {
        return view('baru.frontend.brands.produkaganol');
    }

    public function babysoftproduk()
    {
        return view('baru.frontend.brands.produkbabysoft');
    }

    public function biosoftdetergenproduk()
    {
        return view('baru.frontend.brands.produkbiosoftdetergen');
    }

    public function biosoftproduk()
    {
        return view('baru.frontend.brands.produkbiosoft');
    }

    public function bathroomcleanerproduk()
    {
        return view('baru.frontend.brands.produkbathroomcleaner');
    }

    public function yuribleachproduk()
    {
        return view('baru.frontend.brands.produkyuribleach');
    }

    public function fabriccareproduk()
    {
        return view('baru.frontend.brands.produkfabriccare');
    }

    public function glasscleanerproduk()
    {
        return view('baru.frontend.brands.produkglasscleaner');
    }

    public function handgelproduk()
    {
        return view('baru.frontend.brands.produkhandgel');
    }

    public function handsoapproduk()
    {
        return view('baru.frontend.brands.produkhandsoap');
    }

    public function ligentproduk()
    {
        return view('baru.frontend.brands.produkligent');
    }

    public function ligentbabyproduk()
    {
        return view('baru.frontend.brands.produkligentbaby');
    }

    public function lysorinproduk()
    {
        return view('baru.frontend.brands.produklysorin');
    }

    public function yurisoftproduk()
    {
        return view('baru.frontend.brands.produkyurisoft');
    }

    public function porstexproduk()
    {
        return view('baru.frontend.brands.produkporstex');
    }

     public function porstexregulerproduk()
    {
        return view('baru.frontend.brands.produkporstexreguler');
    }

    public function porstexklosetproduk()
    {
        return view('baru.frontend.brands.produkporstexkloset');
    }

    public function yurisolproduk()
    {
        return view('baru.frontend.brands.produkyurisol');
    }

    public function tafproduk()
    {
        return view('baru.frontend.brands.produktaf');
    }

    public function yurimaticproduk()
    {
        return view('baru.frontend.brands.produkyurimatic');
    }

    public function trilproduk()
    {
        return view('baru.frontend.brands.produktril');
    }

    public function laundrydisinfektantproduk()
    {
        return view('baru.frontend.brands.produklaundrydisinfektant');
    }
    public function disinfektantsprayproduk()
    {
        return view('baru.frontend.brands.produkdisinfektantspray');
    }
    public function handmoisturizerproduk()
    {
        return view('baru.frontend.brands.produkhandmoisturizer');
    }

    // Produk dee dee
    public function childrenshairshampoo()
    {
        return view('baru.frontend.brands.produkdee.childrenshairshampoo');
    }

    public function childrensbodywash()
    {
        return view('baru.frontend.brands.produkdee.childrensbodywash');
    }

    public function mosquitoreppellentlotion()
    {
        return view('baru.frontend.brands.produkdee.mosquitoreppellentlotion');
    }
    public function childrensshowerfoaming()
    {
        return view('baru.frontend.brands.produkdee.childrensshowerfoaming');
    }
    public function childrenstalcumpowder()
    {
        return view('baru.frontend.brands.produkdee.childrenstalcumpowder');
    }
    public function childrenstoothpasta()
    {
        return view('baru.frontend.brands.produkdee.childrenstoothpasta');
    }
    public function shampoolonghair()
    {
        return view('baru.frontend.brands.produkdee.shampoolonghair');
    }
    public function childrensfacialwash()
    {
        return view('baru.frontend.brands.produkdee.childrensfacialwash');
    }

    public function faq(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.faq.index');
        } else {
            return view('baru.frontend.faq.indexsg');
        }
    }
}
