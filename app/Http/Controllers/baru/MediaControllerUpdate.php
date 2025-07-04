<?php

namespace App\Http\Controllers\baru;

use App\Http\Controllers\Controller;
use App\Models\MediaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MediaControllerUpdate extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();

        $data['user'] = $user;
        $data['getRecord'] = MediaModel::getRecord($request);

        //render view with products
        return view('baru.backenddashboardupdate.media.index', $data);
    }

    public function create(){

        $user = Auth::user();

        $data['user'] = $user;
        return view('baru.backenddashboardupdate.media.create', $data);
    }

    public function store(Request $request){
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:20048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/media', $image->hashName());

        //create product
        MediaModel::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'link'          => $request->link,
            'description'   => $request->description
        ]);

        //redirect to index
        return redirect()->route('mediaindex')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id)
    {
        $media = MediaModel::findOrFail($id);

        $user = Auth::user();
        $data['user'] = $user;
        $data['media'] = $media;

        return view('baru.backenddashboardupdate.media.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validate form
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10'
        ]);

        //get product by ID
        $model = MediaModel::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/model', $image->hashName());

            //delete old image
            Storage::delete('public/model/' . $model->image);

            //update product with new image
            $model->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'link'         => $request->link,
                'description'   => $request->description
            ]);
        } else {

            //update product without image
            $model->update([
                'title'         => $request->title,
                'link'         => $request->link,
                'description'   => $request->description
            ]);
        }

        //redirect to index
        return redirect()->route('mediaindex')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        //get product by ID
        $media = MediaModel::findOrFail($id);

        //delete image
        Storage::delete('public/media/' . $media->image);

        //delete product
        $media->delete();

        //redirect to index
        return redirect()->route('mediaindex')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
