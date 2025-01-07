<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukBaru;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProdukBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['getRecord'] = ProdukBaru::getRecord($request);

        return view('authbaru.loginmultiauth.superadmin.produkbaru.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authbaru.loginmultiauth.superadmin.produkbaru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:20048',
            'description'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/produkbaru', $image->hashName());

        //create product
        ProdukBaru::create([
            'image'         => $image->hashName(),
            'description'   => $request->description,
        ]);

        //redirect to index
        return redirect()->route('produkbaru.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        //get product by ID
        $produkbaru = ProdukBaru::findOrFail($id);

        //render view with product
        return view('authbaru.loginmultiauth.superadmin.produkbaru.show', compact('produkbaru'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $produkbaru = ProdukBaru::findOrFail($id);
        return view('authbaru.loginmultiauth.superadmin.produkbaru.edit', compact('produkbaru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'description'   => 'required|min:5'
        ]);

        //get product by ID
        $produkbaru = ProdukBaru::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/produkbaru', $image->hashName());

            //delete old image
            Storage::delete('public/produkbaru/' . $produkbaru->image);

            //update product with new image
            $produkbaru->update([
                'image'         => $image->hashName(),
                'description'   => $request->description
            ]);
        } else {

            //update product without image
            $produkbaru->update([
                'description'   => $request->description,
            ]);
        }

        //redirect to index
        return redirect()->route('produkbaru.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $artikels = ProdukBaru::findOrFail($id);

        //delete image
        Storage::delete('public/produkbaru/' . $artikels->image);

        //delete product
        $artikels->delete();

        //redirect to index
        return redirect()->route('produkbaru.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
