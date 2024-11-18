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

}
