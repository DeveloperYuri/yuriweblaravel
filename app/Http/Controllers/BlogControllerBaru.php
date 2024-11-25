<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class BlogControllerBaru extends Controller
{
    public function index(): View
    {
        //get all products
        $artikels = Artikel::latest()->paginate(10);

        //render view with products
        return view('artikel.index', compact('artikels'));
    }

    public function dashboard(){
        return view('dashboard.index');
    }

    public function create(): View
    {
        return view('artikel.create');
    }

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
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //render view with product
        return view('artikel.show', compact('artikels'));
    }

    public function edit(string $id): View
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //render view with product
        return view('artikel.edit', compact('artikels'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
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
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $artikels = Artikel::findOrFail($id);

        //delete image
        Storage::delete('public/artikels/'. $artikels->image);

        //delete product
        $artikels->delete();

        //redirect to index
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
