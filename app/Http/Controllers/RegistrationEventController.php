<?php

namespace App\Http\Controllers;

use App\Exports\RegistrationEventExport;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class RegistrationEventController extends Controller
{
    public function index(Request $request){

        $user = Auth::user();

        $data['user'] = $user;
        $data['getRecord'] = EventRegistration::getRecord($request);

        return view('baru.backenddashboardupdate.registrationevent.index', $data);
    }

    public function show(string $id){
        $registevent = EventRegistration::findOrFail($id);

        $user = Auth::user();

        $data['user'] = $user;
        $data['registevent'] = $registevent;

        return view('baru.backenddashboardupdate.registrationevent.show', $data);
    }

    public function export()
    {
        return Excel::download(new RegistrationEventExport, 'registration_event.xlsx');
    }

    public function destroy(string $id){
         $registevent = EventRegistration::findOrFail($id);

        //delete image
        Storage::delete('public/registrationevent/' . $registevent->image);

        //delete product
        $registevent->delete();

        //redirect to index
        return redirect()->route('registrationeventindex')->with(['success' => 'Data Berhasil di Delete!']);
    }
}
