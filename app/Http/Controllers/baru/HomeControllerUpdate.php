<?php

namespace App\Http\Controllers\baru;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationSuccessMail;
use App\Models\Artikel;
use App\Models\ArtikelBaru;
use App\Models\EventModel;
use App\Models\EventRegistration;
use App\Models\MediaModel;
use App\Models\ProdukBaru;
use App\Models\ProdukbaruModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Mail;


class HomeControllerUpdate extends Controller
{
    public function index(Request $request): View
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        // dd($var_countryname);

        if ($var_countryname == "Indonesia") {
            //get all products
            $artikels = Artikel::latest()->paginate(3);
            $events = EventModel::all();

            //render view with products
            return view('baru.frontend.homepage.index', [
                'artikels' => $artikels,
                'events' => $events
            ]);
            // return view('baru.frontend.homepage.index', compact('artikels'));
        } else {
            //get all products
            $artikels = Artikel::latest()->paginate(3);

            //render view with products
            return view('baru.frontend.homepage.index', compact('artikels'));
        }
    }

    public function tentangKami(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.tentangkami.index');
        } else {
            return view('baru.frontend.tentangkami.indexsg');
        }
    }

    public function brands(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.brands.index');
        } else {
            return view('baru.frontend.brands.indexsg');
        }
    }

    public function artikel(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $artikelbaru = ArtikelBaru::latest()->paginate(9);
            return view('baru.frontend.artikel.index', compact('artikelbaru'));
        } else {
            $artikelbaru = ArtikelBaru::latest()->paginate(9);
            return view('artikelbaru.index', compact('artikelbaru'));
            return view('baru.frontend.artikel.indexsg');
        }
    }

    public function media(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {

            $media = MediaModel::latest()->paginate(9);
            return view('baru.frontend.media.index', compact('media'));
        } else {

            $media = MediaModel::latest()->paginate(9);
            return view('baru.frontend.media.index', compact('media'));
        }
    }

    public function produkBaru(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            $produkbaru = ProdukbaruModel::all();

            return view('baru.frontend.produkbaru.index', compact('produkbaru'));
        } else {
            $produkbaru = ProdukbaruModel::all();

            return view('baru.frontend.produkbaru.indexsg', compact('produkbaru'));
        }
    }

    public function kontak(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.kontak.index');
        } else {
            return view('baru.frontend.kontak.indexsg');
        }
    }

    public function distributor(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.distributor.index');
        } else {
            return view('baru.frontend.distributor.indexsg');
        }
    }

    public function event(Request $request)
    {
        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {

            $events = EventModel::all();
            return view('baru.frontend.event.index', compact('events'));
        } else {

            $events = EventModel::all();
            return view('baru.frontend.event.index', compact('events'));
        }
    }


    // Brands 
    public function householdcleaner()
    {
        return view('baru.frontend.brands.householdcleaner');
    }

    public function childrentoilet()
    {
        return view('baru.frontend.brands.childrentoilet');
    }

    public function babytoilet()
    {
        return view('baru.frontend.brands.babytoilet');
    }

    public function adulttoilet()
    {
        return view('baru.frontend.brands.adulttoilet');
    }

    public function aganolproduk()
    {
        return view('baru.frontend.brands.produkaganol');
    }

    public function babysoftproduk()
    {
        return view('baru.frontend.brands.produkbabysoft');
    }

    public function biosoftdetergenproduk()
    {
        return view('baru.frontend.brands.produkbiosoftdetergen');
    }

    public function biosoftproduk()
    {
        return view('baru.frontend.brands.produkbiosoft');
    }

    public function bathroomcleanerproduk()
    {
        return view('baru.frontend.brands.produkbathroomcleaner');
    }

    public function yuribleachproduk()
    {
        return view('baru.frontend.brands.produkyuribleach');
    }

    public function fabriccareproduk()
    {
        return view('baru.frontend.brands.produkfabriccare');
    }

    public function glasscleanerproduk()
    {
        return view('baru.frontend.brands.produkglasscleaner');
    }

    public function handgelproduk()
    {
        return view('baru.frontend.brands.produkhandgel');
    }

    public function handsoapproduk()
    {
        return view('baru.frontend.brands.produkhandsoap');
    }

    public function ligentproduk()
    {
        return view('baru.frontend.brands.produkligent');
    }

    public function ligentbabyproduk()
    {
        return view('baru.frontend.brands.produkligentbaby');
    }

    public function lysorinproduk()
    {
        return view('baru.frontend.brands.produklysorin');
    }

    public function yurisoftproduk()
    {
        return view('baru.frontend.brands.produkyurisoft');
    }

    public function porstexproduk()
    {
        return view('baru.frontend.brands.produkporstex');
    }

    public function porstexregulerproduk()
    {
        return view('baru.frontend.brands.produkporstexreguler');
    }

    public function porstexklosetproduk()
    {
        return view('baru.frontend.brands.produkporstexkloset');
    }

    public function yurisolproduk()
    {
        return view('baru.frontend.brands.produkyurisol');
    }

    public function tafproduk()
    {
        return view('baru.frontend.brands.produktaf');
    }

    public function yurimaticproduk()
    {
        return view('baru.frontend.brands.produkyurimatic');
    }

    public function trilproduk()
    {
        return view('baru.frontend.brands.produktril');
    }

    public function laundrydisinfektantproduk()
    {
        return view('baru.frontend.brands.produklaundrydisinfektant');
    }
    public function disinfektantsprayproduk()
    {
        return view('baru.frontend.brands.produkdisinfektantspray');
    }
    public function handmoisturizerproduk()
    {
        return view('baru.frontend.brands.produkhandmoisturizer');
    }

    // Produk dee dee
    public function childrenshairshampoo()
    {
        return view('baru.frontend.brands.produkdee.childrenshairshampoo');
    }

    public function childrensbodywash()
    {
        return view('baru.frontend.brands.produkdee.childrensbodywash');
    }

    public function mosquitoreppellentlotion()
    {
        return view('baru.frontend.brands.produkdee.mosquitoreppellentlotion');
    }
    public function childrensshowerfoaming()
    {
        return view('baru.frontend.brands.produkdee.childrensshowerfoaming');
    }
    public function childrenstalcumpowder()
    {
        return view('baru.frontend.brands.produkdee.childrenstalcumpowder');
    }
    public function childrenstoothpasta()
    {
        return view('baru.frontend.brands.produkdee.childrenstoothpasta');
    }
    public function shampoolonghair()
    {
        return view('baru.frontend.brands.produkdee.shampoolonghair');
    }
    public function childrensfacialwash()
    {
        return view('baru.frontend.brands.produkdee.childrensfacialwash');
    }

    public function eventregistration()
    {
        return view('baru.frontend.event.registration');
    }

    public function eventregistrationsuccess()
    {
        return view('baru.frontend.event.registrationsuccess');
    }

    public function eventregistrationpost(Request $request)
    {
        $request->validate([
            'nama'             => 'required|string|max:255',
            'nomor_telepon'    => 'required|string|max:20',
            'email'            => 'required|email|max:255|unique:registrationevent,email',
            'domisili'         => 'required|string|max:100',
            'tanggal_lahir'    => 'required|date',
            'umur'             => 'required|string|max:50',
            'kategori_lomba'   => 'required|string|max:100',
            'info_event'       => 'required|string|max:100',
            'image_upload'     => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'link'             => 'required|url',
        ], [
            'nama.required'             => 'Nama lengkap wajib diisi.',
            'nomor_telepon.required'    => 'Nomor telepon wajib diisi.',
            'email.required'            => 'Email wajib diisi.',
            'email.email'               => 'Format email tidak valid.',
            'email.unique'              => 'Email sudah terdaftar.',
            'domisili.required'         => 'Domisili wajib diisi.',
            'tanggal_lahir.required'    => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.date'        => 'Format tanggal lahir tidak valid.',
            'umur.required'             => 'Kategori umur wajib diisi.',
            'kategori_lomba.required'   => 'Kategori lomba wajib dipilih.',
            'info_event.required'       => 'Sumber informasi event wajib diisi.',
            'image_upload.required'     => 'File wajib diunggah.',
            'image_upload.mimes'        => 'File harus berupa JPG, JPEG, PNG, atau PDF.',
            'image_upload.max'          => 'Ukuran file maksimal 2MB.',
            'link.required'             => 'Link wajib diisi.',
            'link.url'                  => 'Format link tidak valid.',
        ]);

        //upload image
        $image = $request->file('image_upload');
        $image->storeAs('public/registrationevent', $image->hashName());

        EventRegistration::create([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'domisili' => $request->domisili,
            'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            'umur' => $request->umur,
            'kategori_lomba' => $request->kategori_lomba,
            'info_event' => $request->info_event,
            'image_upload' => $image->hashName(),
            'link' => $request->link,
        ]);

        Mail::to($request->email)->send(new RegistrationSuccessMail($request->nama));

        return redirect()->route('eventregistrationsuccess')->with('success', 'Pendaftaran sukses');
    }

    public function faq(Request $request)
    {

        $ip = '116.50.29.50'; // $request->ip();
        $currentUserInfo = Location::get($ip);
        $var_countryname = $currentUserInfo->countryName;

        if ($var_countryname == "Indonesia") {
            return view('baru.frontend.faq.index');
        } else {
            return view('baru.frontend.faq.indexsg');
        }
    }
}
