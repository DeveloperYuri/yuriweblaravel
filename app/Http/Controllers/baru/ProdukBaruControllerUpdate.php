<?php

namespace App\Http\Controllers\baru;

use App\Http\Controllers\Controller;
use App\Models\ProdukBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProdukBaruControllerUpdate extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $data['user'] = $user;
        $data['getRecord'] = ProdukBaru::getRecord($request);

        return view('baru.backenddashboardupdate.produkbaru.index', $data);
    }


    public function create()
    {
        $user = Auth::user();

        $data['user'] = $user;
        return view('baru.backenddashboardupdate.produkbaru.create', $data);
    }

    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:20048',
            'description'   => 'required'
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
        return redirect()->route('produkbaruindex')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id)
    {
        $produkbaru = ProdukBaru::findOrFail($id);

        $user = Auth::user();
        $data['user'] = $user;
        $data['produkbaru'] = $produkbaru;

        return view('baru.backenddashboardupdate.produkbaru.edit', $data);
    }

    public function update(Request $request, $id)
    {
        //validate form
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'description'   => 'required'
        ]);

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
        return redirect()->route('produkbaruindex')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        //get product by ID
        $produkbaru = ProdukBaru::findOrFail($id);

        //delete image
        Storage::delete('public/produkbaru/' . $produkbaru->image);

        //delete product
        $produkbaru->delete();

        //redirect to index
        return redirect()->route('produkbaruindex')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
