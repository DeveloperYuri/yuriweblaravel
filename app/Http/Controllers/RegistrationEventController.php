<?php

namespace App\Http\Controllers;

use App\Exports\RegistrationEventExport;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


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
}
