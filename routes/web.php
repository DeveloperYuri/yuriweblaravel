<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogControllerBaru;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

//Navbar
Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/tentangkami', [BlogController::class,'tentangKami']);
Route::get('/brands', [BlogController::class,'brands']);
Route::get('/onlineshop', [BlogController::class,'onlineShop']);
Route::get('/produkbaru', [BlogController::class,'produkBaru']);
Route::get('/kontak', [BlogController::class,'kontak']);
Route::get('/distributor', [BlogController::class,'distributor']);

//Artikel
Route::get('/article1', [BlogController::class,'article1']);
Route::get('/article2',[BlogController::class,'article2']);
Route::get('/article3', [BlogController::class,'article3']);

//Brand
Route::get('/householdcleaner', [BlogController::class,'householdcleaner']);
Route::get('/childrentoilet', [BlogController::class,'childrentoilet']);
Route::get('/babytoilet', [BlogController::class,'babytoilet']);
Route::get('/adulttoilet', [BlogController::class,'adulttoilet']);

//Produk
Route::get('/aganol', [BlogController::class,'aganolproduk']);
Route::get('/babysoft', [BlogController::class,'babysoftproduk']);
Route::get('/biosoftdetergen', [BlogController::class,'biosoftdetergenproduk']);
Route::get('/biosoft', [BlogController::class,'biosoftproduk']);
Route::get('/bathroomcleaner', [BlogController::class,'bathroomcleanerproduk']);
Route::get('/yuribleach', [BlogController::class,'yuribleachproduk']);
Route::get('/fabriccare', [BlogController::class,'fabriccareproduk']);
Route::get('/glasscleaner', [BlogController::class,'glasscleanerproduk']);
Route::get('/handgel', [BlogController::class,'handgelproduk']);
Route::get('/handsoap', [BlogController::class,'handsoapproduk']);
Route::get('/ligent', [BlogController::class,'ligentproduk']);
Route::get('/lysorin', [BlogController::class,'lysorinproduk']);
Route::get('/yurisoft', [BlogController::class,'yurisoftproduk']);
Route::get('/porstex', [BlogController::class,'porstexproduk']);
Route::get('/yurisol', [BlogController::class,'yurisolproduk']);
Route::get('/taf', [BlogController::class,'tafproduk']);
Route::get('/yurimatic', [BlogController::class,'yurimaticproduk']);
Route::get('/tril', [BlogController::class,'trilproduk']);
Route::get('/laundrydisinfektant', [BlogController::class,'laundrydisinfektantproduk']);
Route::get('/disinfektantspray', [BlogController::class,'disinfektantsprayproduk']);
Route::get('/handmoisturizer', [BlogController::class,'handmoisturizerproduk']);

//Login & Register
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register/yuri', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

//CRUD 
Route::get('/homepage', [BlogController::class, 'index'])->name('index.index');
Route::get('/create', [BlogController::class, 'create'])->name('index.create');
Route::post('/storesave', [BlogController::class, 'store'])->name('index.store');
Route::delete('/blog/delete{id}', [BlogController::class, 'destroy'])->name('index.destroy');
Route::get('/blog/edit{id}', [BlogController::class, 'edit'])->name('index.edit');
Route::put('/blog/update{id}', [BlogController::class, 'update'])->name('index.update');

//CRUD Image
Route::resource('/artikel', \App\Http\Controllers\BlogControllerBaru::class);

//Media
Route::get('/media', [MediaController::class,'index'])->name('media.index');
Route::get('/media/{id}', [MediaController::class,'show'])->name('media.show');


Route::get('/dashboard', [BlogControllerBaru::class,'dashboard'])->name('dashboard.index');
Route::get('/artikel', [BlogControllerBaru::class,'artikel'])->name('dashboard.artikel');






