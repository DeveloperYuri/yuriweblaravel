<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        $blog = Blog::all();
        return view('homepage.index', compact('blog'));
    }

    public function tentangKami(){
        return view('tentangkami.index');
    }

    public function brands(){
        return view('brands.index');
    }

    public function onlineShop(){
        return view('onlineshop');
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

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Blog::create($request->all());

        return redirect()->route('home');
    }

    public function destroy(Blog $id)
    {
        $id->delete();

        return redirect()->route('home');
    }

    public function edit(Blog $id)
    {
        //
        return view('edit', compact('id'));
    }

    public function update(Request $request, string $id){
        $blog = Blog::findOrFail($id);

        $blog->update([
            'title'         => $request->title,
            'description'   => $request->description
        ]);
 
        return redirect()->route('home');
    }

    public function faq(){
        return view('faq.index');
    }

}
