<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Ui\HomeController;
use Illuminate\Support\Facades\Route;



//Route::get('/anasayfa', function () {
//    return view('home.index');
//});

//Route::get("/giris", [AuthController::class, 'showSignInForm']);
//Route::post("/giris", [AuthController::class, 'signIn']);
//
//Route::get("/uye-ol", [AuthController::class, 'showSignUpForm']);
//Route::post("/uye-ol", [AuthController::class, 'signUp']);
//
//Route::get("/cikis", [AuthController::class, 'logout']);

Route::get('/anasayfa', [HomeController::class, 'index']);

Route::get('/hakkimizda', [AboutController::class, 'index'])->name('about.index');
Route::get('/hizmetlerimiz', [ServiceController::class, 'index'])->name('service.index');
Route::get('/calismalarimiz', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/iletisim', [ContactController::class, 'index'])->name('contact.index');
Route::post('/iletisim', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('yonetim')->name('yonetim.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('hakkimizda', AboutController::class);
    Route::resource('yorumlar', ClientController::class);
    Route::resource('iletisim', ContactController::class);
    Route::resource('calismalar', PortfolioController::class);
    Route::resource('hizmetler', ServiceController::class);
    Route::resource('slider', SliderController::class);
});
