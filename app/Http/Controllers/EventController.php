<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;

class EventController extends Controller
{
    public function index()
    {
        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $events = EventModel::all();

            return view('event.index', compact('events'));
        } else {
            $events = EventModel::all();

            return view('event.indexsg', compact('events'));
        }
    }

    public function listevent(Request $request)
    {
        $data['getRecord'] = EventModel::getRecord($request);

        return view('authbaru.loginmultiauth.superadmin.event.index', $data);
    }

    public function createevent(Request $request)
    {
        return view('authbaru.loginmultiauth.superadmin.event.create');
    }

    public function createeventpost(Request $request)
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:20048',
            'description'   => 'required|min:1'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/event', $image->hashName());

        //create product
        EventModel::create([
            'image'         => $image->hashName(),
            'description'   => $request->description,
        ]);

        //redirect to index
        return redirect()->route('listevent')->with(['success' => 'Data Berhasil Disimpan!']);
    }

     public function editevent(string $id)
    {
        $events = EventModel::findOrFail($id);
        return view('authbaru.loginmultiauth.superadmin.event.edit', compact('events'));
    }

    public function editeventpost(Request $request, $id)
    {
        //validate form
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'description'   => 'required|min:5'
        ]);

        //get product by ID
        $events = EventModel::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/event', $image->hashName());

            //delete old image
            Storage::delete('public/event/' . $events->image);

            //update product with new image
            $events->update([
                'image'         => $image->hashName(),
                'description'   => $request->description
            ]);
        } else {

            //update product without image
            $events->update([
                'description'   => $request->description,
            ]);
        }

        //redirect to index
        return redirect()->route('listevent')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function showevent(string $id)
    {
        //get product by ID
        $events = EventModel::findOrFail($id);

        //render view with product
        return view('authbaru.loginmultiauth.superadmin.event.show', compact('events'));
    }

    public function deleteevent($id)
    {
        //get product by ID
        $events = EventModel::findOrFail($id);

        //delete image
        Storage::delete('public/event/' . $events->image);

        //delete product
        $events->delete();

        //redirect to index
        return redirect()->route('listevent')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
