<?php

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Ui\AboutController;
use App\Http\Controllers\Ui\ClientController;
use App\Http\Controllers\Ui\ContactController;
use App\Http\Controllers\Ui\HomeController;
use App\Http\Controllers\Ui\PortfolioController;
use App\Http\Controllers\Ui\ServiceController;
use App\Http\Controllers\Ui\SliderController;
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
    // Ana yönetim paneli sayfası
    Route::get('/', [AdminController::class, 'index'])->name('index');

    // About (Hakkımızda) CRUD işlemleri
    Route::resource('hakkimizda', AdminAboutController::class);

    // Client (Yorumlar) CRUD işlemleri
    Route::resource('yorumlar', AdminClientController::class);

    // Contact (İletişim) CRUD işlemleri
    Route::resource('iletisim', AdminContactController::class);

    // Portfolio (Çalışmalar) CRUD işlemleri
    Route::resource('calismalar', AdminPortfolioController::class);

    // Service (Hizmetler) CRUD işlemleri
    Route::resource('hizmetler', AdminServiceController::class);

    // Slider CRUD işlemleri
    Route::resource('slider', AdminSliderController::class);

    // User CRUD işlemleri
    Route::resource('user', AdminUserController::class);
});
