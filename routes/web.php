<?php

use App\Http\Controllers\ArtikelBaru;
use App\Http\Controllers\ArtikelBaruController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\AuthControllerBaru;
use App\Http\Controllers\DashboardControllerBaru;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ProdukBaruController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Navbar
Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/tentangkami', [HomeController::class,'tentangKami'])->name('index.tentangkami');
Route::get('/brands', [HomeController::class,'brands'])->name('index.brands');
Route::get('/produkbaru', [HomeController::class,'produkBaru'])->name('index.produkbaru');
Route::get('/kontak', [HomeController::class,'kontak'])->name('index.kontak');
Route::get('/distributor', [HomeController::class,'distributor'])->name('index.distributor');

//Brand
Route::get('/householdcleaner', [HomeController::class,'householdcleaner'])->name('brands.householdcleaner');
Route::get('/childrentoilet', [HomeController::class,'childrentoilet'])->name('brands.childrentoilet');
Route::get('/babytoilet', [HomeController::class,'babytoilet'])->name('brands.babytoilet');
Route::get('/adulttoilet', [HomeController::class,'adulttoilet'])->name('brands.adulttoilet');

//Produk
Route::get('/aganol', [HomeController::class,'aganolproduk'])->name('brands.aganol');
Route::get('/babysoft', [HomeController::class,'babysoftproduk'])->name('brands.babysoft');
Route::get('/biosoftdetergen', [HomeController::class,'biosoftdetergenproduk'])->name('brands.biosoftdetergen');
Route::get('/biosoft', [HomeController::class,'biosoftproduk'])->name('brands.biosoft');
Route::get('/bathroomcleaner', [HomeController::class,'bathroomcleanerproduk'])->name('brands.bathroomcleaner');
Route::get('/yuribleach', [HomeController::class,'yuribleachproduk'])->name('brands.yuribleach');
Route::get('/fabriccare', [HomeController::class,'fabriccareproduk'])->name('brands.fabriccare');
Route::get('/glasscleaner', [HomeController::class,'glasscleanerproduk'])->name('brands.glasscleaner');
Route::get('/handgel', [HomeController::class,'handgelproduk'])->name('brands.handgel');
Route::get('/handsoap', [HomeController::class,'handsoapproduk'])->name('brands.handsoap');
Route::get('/ligent', [HomeController::class,'ligentproduk'])->name('brands.ligent');
Route::get('/lysorin', [HomeController::class,'lysorinproduk'])->name('brands.lysorin');
Route::get('/yurisoft', [HomeController::class,'yurisoftproduk'])->name('brands.yurisoft');
Route::get('/porstex', [HomeController::class,'porstexproduk'])->name('brands.porstex');
Route::get('/yurisol', [HomeController::class,'yurisolproduk'])->name('brands.yurisol');
Route::get('/taf', [HomeController::class,'tafproduk'])->name('brands.taf');
Route::get('/yurimatic', [HomeController::class,'yurimaticproduk'])->name('brands.yurimatic');
Route::get('/tril', [HomeController::class,'trilproduk'])->name('brands.tril');
Route::get('/laundrydisinfektant', [HomeController::class,'laundrydisinfektantproduk'])->name('brands.laundrydisinfektant');
Route::get('/disinfektantspray', [HomeController::class,'disinfektantsprayproduk'])->name('brands.disinfektantspray');
Route::get('/handmoisturizer', [HomeController::class,'handmoisturizerproduk'])->name('brands.handmoisturizer');

//FAQ
Route::get('/faq', [HomeController::class,'faq'])->name('index.faq');

//Login & Register
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register/yuri', 'register')->name('register');
    Route::post('/registerstore', 'registerstore')->name('register.store');
    Route::get('/loginbaru', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

//Media
Route::get('/media', [MediaController::class,'index'])->name('media.index');
Route::get('/media/{id}', [MediaController::class,'show'])->name('media.show');

//Dashboard
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
Route::get('/dashboardartikel', [DashboardController::class,'dashboardartikel'])->name('dashboard.artikel');
Route::get('/create', [DashboardController::class,'create'])->name('dashboard.create');
Route::post('/store', [DashboardController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/edit{id}', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::delete('/dashboard/delete{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
Route::put('/dashboard/update{id}', [DashboardController::class, 'update'])->name('dashboard.update');
Route::get('/dashboard/{id}', [DashboardController::class,'show'])->name('dashboard.show');

// Login Multi Auth 

// Registration
Route::get('registration', [AuthControllerBaru::class, 'registrationbaru']);
Route::post('registration_post', [AuthControllerBaru::class, 'registration_post']);

// Login
Route::get('login', [AuthControllerBaru::class, 'loginbaru']);
Route::post('login_post', [AuthControllerBaru::class, 'login_post']);

// Forgot Password
Route::get('forgot', [AuthControllerBaru::class, 'forgot']);
Route::post('forgot_post', [AuthControllerBaru::class, 'forgot_post']);

// Reset Password
Route::get('reset/{token}', [AuthControllerBaru::class, 'getReset']);
Route::post('reset_post/{token}', [AuthControllerBaru::class, 'postReset']);

// Logout
Route::get('logoutbaru', [AuthControllerBaru::class, 'logout']);

Route::group(['middleware' => 'superadmin'], function () {
    Route::get('superadmin/dashboard', [DashboardControllerBaru::class, 'dashboard'])->name('superadmindashboard.dashboard');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardControllerBaru::class, 'dashboard']);
});

// Dashboard Baru
Route::get('/superadmin/artikel', [DashboardControllerBaru::class,'dashboardartikel'])->name('superadmindashboard.artikel');
Route::get('/superadmin/create', [DashboardControllerBaru::class,'create'])->name('superadmindashboard.create');
Route::post('/superadmin/store', [DashboardControllerBaru::class, 'store'])->name('superadmindashboard.store');
Route::get('/superadmin/dashboard/edit{id}', [DashboardControllerBaru::class, 'edit'])->name('superadmindashboard.edit');
Route::delete('/superadmin/dashboard/delete{id}', [DashboardControllerBaru::class, 'destroy'])->name('superadmindashboard.destroy');
Route::put('/superadmin/dashboard/update{id}', [DashboardControllerBaru::class, 'update'])->name('superadmindashboard.update');
Route::get('/superadmin/dashboard/{id}', [DashboardControllerBaru::class,'show'])->name('superadmindashboard.show');

// Produk Baru
Route::get('/superadmin/produkbaru', [ProdukBaruController::class,'index'])->name('produkbaru.index');
Route::get('/superadmin/createprodukbaru', [ProdukBaruController::class,'create'])->name('produkbaru.create');
Route::get('/superadmin/editprodukbaru/edit{id}', [ProdukBaruController::class,'edit'])->name('produkbaru.edit');
Route::post('/superadmin/postprodukbaru', [ProdukBaruController::class,'store'])->name('produkbaru.store');
Route::delete('/superadmin/deleteprodukbaru/delete{id}', [ProdukBaruController::class,'destroy'])->name('produkbaru.destroy');
Route::put('/superadmin/produkbaru/update{id}', [ProdukBaruController::class, 'update'])->name('produkbaru.update');
Route::get('/superadmin/showprodukbaru/{id}', [ProdukBaruController::class,'show'])->name('produkbaru.show');

// User
Route::get('/superadmin/users', [UserController::class,'index'])->name('users.index');
Route::get('/superadmin/createusers', [UserController::class,'create'])->name('users.create');
Route::get('/superadmin/editusers/edit{id}', [UserController::class,'edit'])->name('users.edit');
Route::post('/superadmin/postusers', [UserController::class,'store'])->name('users.store');
Route::delete('/superadmin/deleteusers/delete{id}', [UserController::class,'destroy'])->name('users.destroy');
Route::put('/superadmin/users/update{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/superadmin/showusers/{id}', [ProdukBaruController::class,'show'])->name('users.show');

// Forgot Password
Route::get('/superadmin/users/forgot', [UserController::class, 'forgot'])->name('users.forgot');
Route::post('/superadmin/users/forgot_post', [UserController::class, 'forgot_post'])->name('users.forgotpost');


Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);

// Artikel baru
Route::get('/artikel', [ArtikelBaruController::class,'index'])->name('artikelbaru.index');
Route::get('/superadmin/artikelbaru', [ArtikelBaruController::class,'indexdashboard'])->name('superadminartikelbaru.index');
Route::get('/superadmin/createartikelbaru', [ArtikelBaruController::class,'create'])->name('superadminartikelbaru.create');
Route::get('/superadmin/editartikelbaru/edit{id}', [ArtikelBaruController::class,'edit'])->name('superadminartikelbaru.edit');
Route::post('/superadmin/postartikelbaru', [ArtikelBaruController::class,'store'])->name('superadminartikelbaru.store');
Route::delete('/superadmin/deleteartikelbaru/delete{id}', [ArtikelBaruController::class,'destroy'])->name('superadminartikelbaru.destroy');
Route::put('/superadmin/artikelbaru/update{id}', [ArtikelBaruController::class, 'update'])->name('superadminartikelbaru.update');
Route::get('/superadmin/showartikelbaru/{id}', [ArtikelBaruController::class,'show'])->name('superadminartikelbaru.show');
Route::get('/showartikelbaru/{id}', [ArtikelBaruController::class,'showindex'])->name('indexartikelbaru.show');














