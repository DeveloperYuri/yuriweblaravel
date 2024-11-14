<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }

    public function tentangKami(){
        return view('tentangkami');
    }

    public function brands(){
        return view('brands');
    }

    public function onlineShop(){
        return view('onlineshop');
    }

    public function media(){
        return view('media');
    }

    public function produkBaru(){
        return view('produkbaru');
    }

    public function kontak(){
        return view('kontak');
    }

    public function distributor(){
        return view('distributor');
    }

    public function article1(){
        return view('article1');
    }

    public function article2(){
        return view('article2');
    }

    public function article3(){
        return view('article3');
    }

    public function householdcleaner(){
        return view('householdcleaner');
    }

    public function childrentoilet(){
        return view('childrentoilet');
    }

    public function babytoilet(){
        return view('babytoilet');
    }

    public function adulttoilet(){
        return view('adulttoilet');
    }

    public function aganolproduk(){
        return view('produkaganol');
    }

    public function babysoftproduk(){
        return view('produkbabysoft');
    }

    public function biosoftdetergenproduk(){
        return view('produkbiosoftdetergen');
    }

    public function biosoftproduk(){
        return view('produkbiosoft');
    }

    public function bathroomcleanerproduk(){
        return view('produkbathroomcleaner');
    }

    public function yuribleachproduk(){
        return view('produkyuribleach');
    }

    public function fabriccareproduk(){
        return view('produkfabriccare');
    }

    public function glasscleanerproduk(){
        return view('produkglasscleaner');
    }

    public function handgelproduk(){
        return view('produkhandgel');
    }

    public function handsoapproduk(){
        return view('produkhandsoap');
    }

    public function ligentproduk(){
        return view('produkligent');
    }

    public function lysorinproduk(){
        return view('produklysorin');
    }

    public function yurisoftproduk(){
        return view('produkyurisoft');
    }

    public function porstexproduk(){
        return view('produkporstex');
    }

    public function yurisolproduk(){
        return view('produkyurisol');
    }

    public function tafproduk(){
        return view('produktaf');
    }

    public function yurimaticproduk(){
        return view('produkyurimatic');
    }

    public function trilproduk(){
        return view('produktril');
    }

    public function laundrydisinfektantproduk(){
        return view('produklaundrydisinfektant');
    }
    public function disinfektantsprayproduk(){
        return view('produkdisinfektantspray');
    }
    public function handmoisturizerproduk(){
        return view('produkhandmoisturizer');
    }
}
