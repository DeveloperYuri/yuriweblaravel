<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        //get all products
        $artikels = Artikel::latest()->paginate(3);

        //render view with products
        return view('homepage.index', compact('artikels'));
    }

    public function show(string $id): View
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //render view with product
        return view('homepage.show', compact('artikels'));
    }

    public function tentangKami(){
        return view('tentangkami.index');
    }

    public function brands(){
        return view('brands.index');
    }

    public function produkBaru(){
        return view('produkbaru.index');
    }

    public function kontak(){
        return view('kontak.index');
    }

    public function distributor(){
        return view('distributor.index');
    }

    public function householdcleaner(){
        return view('brands.householdcleaner');
    }

    public function childrentoilet(){
        return view('brands.childrentoilet');
    }

    public function babytoilet(){
        return view('brands.babytoilet');
    }

    public function adulttoilet(){
        return view('brands.adulttoilet');
    }

    public function aganolproduk(){
        return view('brands.produkaganol');
    }

    public function babysoftproduk(){
        return view('brands.produkbabysoft');
    }

    public function biosoftdetergenproduk(){
        return view('brands.produkbiosoftdetergen');
    }

    public function biosoftproduk(){
        return view('brands.produkbiosoft');
    }

    public function bathroomcleanerproduk(){
        return view('brands.produkbathroomcleaner');
    }

    public function yuribleachproduk(){
        return view('brands.produkyuribleach');
    }

    public function fabriccareproduk(){
        return view('brands.produkfabriccare');
    }

    public function glasscleanerproduk(){
        return view('brands.produkglasscleaner');
    }

    public function handgelproduk(){
        return view('brands.produkhandgel');
    }

    public function handsoapproduk(){
        return view('brands.produkhandsoap');
    }

    public function ligentproduk(){
        return view('brands.produkligent');
    }

    public function lysorinproduk(){
        return view('brands.produklysorin');
    }

    public function yurisoftproduk(){
        return view('brands.produkyurisoft');
    }

    public function porstexproduk(){
        return view('brands.produkporstex');
    }

    public function yurisolproduk(){
        return view('brands.produkyurisol');
    }

    public function tafproduk(){
        return view('brands.produktaf');
    }

    public function yurimaticproduk(){
        return view('brands.produkyurimatic');
    }

    public function trilproduk(){
        return view('brands.produktril');
    }

    public function laundrydisinfektantproduk(){
        return view('brands.produklaundrydisinfektant');
    }
    public function disinfektantsprayproduk(){
        return view('brands.produkdisinfektantspray');
    }
    public function handmoisturizerproduk(){
        return view('brands.produkhandmoisturizer');
    }


    public function faq(){
        return view('faq.index');
    }

}
