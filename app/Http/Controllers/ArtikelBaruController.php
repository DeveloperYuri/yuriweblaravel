<?php

namespace App\Http\Controllers;

use App\Models\ArtikelBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ArtikelBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $artikelbaru = ArtikelBaru::latest()->paginate(9);

        //render view with products
        return view('artikelbaru.index', compact('artikelbaru'));
    }

    public function indexdashboard(Request $request)
    {

        $data['getRecord'] = ArtikelBaru::getRecord($request);
        return view('authbaru.loginmultiauth.superadmin.artikelbaru.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authbaru.loginmultiauth.superadmin.artikelbaru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image->storeAs('public/artikelbaru', $image->hashName());

        //create product
        ArtikelBaru::create([
            'image'         => $image->hashName(),
            'title'   => $request->title,
            'description'   => $request->description,
        ]);

        //redirect to index
        return redirect()->route('superadminartikelbaru.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artikelbaru = ArtikelBaru::findOrFail($id);

        //render view with product
        return view('authbaru.loginmultiauth.superadmin.artikelbaru.show', compact('artikelbaru'));
    }

    public function showindex(string $id)
    {
        $artikelbaru = ArtikelBaru::findOrFail($id);

        //render view with product
        return view('artikelbaru.show', compact('artikelbaru'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artikelbaru = ArtikelBaru::findOrFail($id);
        return view('authbaru.loginmultiauth.superadmin.artikelbaru.edit', compact('artikelbaru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //get product by ID
        $artikelbaru = ArtikelBaru::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/artikelbaru', $image->hashName());

            //delete old image
            Storage::delete('public/artikelbaru/' . $artikelbaru->image);

            //update product with new image
            $artikelbaru->update([
                'image'         => $image->hashName(),
                'title'   => $request->title,
                'description'   => $request->description
            ]);
        } else {

            //update product without image
            $artikelbaru->update([
                'title'   => $request->title,
                'description'   => $request->description,
            ]);
        }

        //redirect to index
        return redirect()->route('superadminartikelbaru.index')->with(['success' => 'Data Berhasil di Delete!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikelbaru = ArtikelBaru::findOrFail($id);

        //delete image
        Storage::delete('public/artikelbaru/' . $artikelbaru->image);

        //delete product
        $artikelbaru->delete();

        //redirect to index
        return redirect()->route('superadminartikelbaru.index')->with(['success' => 'Data Berhasil di Delete!']);
    }
}
