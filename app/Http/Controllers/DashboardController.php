<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('dashboard.index');
    }

    public function dashboardartikel(){
        $artikels = Artikel::latest()->paginate(10);

        return view('dashboard.artikel', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:20048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/artikels', $image->hashName());

        //create product
        Artikel::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description
        ]);

        //redirect to index
        return redirect()->route('dashboard.artikel')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //render view with product
        return view('dashboard.show', compact('artikels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //render view with product
        return view('dashboard.edit', compact('artikels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10'
        ]);

        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/artikels', $image->hashName());

            //delete old image
            Storage::delete('public/artikels/'.$artikels->image);

            //update product with new image
            $artikels->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'description'   => $request->description
            ]);

        } else {

            //update product without image
            $artikels->update([
                'title'         => $request->title,
                'description'   => $request->description
            ]);
        }

        //redirect to index
        return redirect()->route('dashboard.artikel')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //delete image
        Storage::delete('public/artikels/'. $artikels->image);

        //delete product
        $artikels->delete();

        //redirect to index
        return redirect()->route('dashboard.artikel')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
