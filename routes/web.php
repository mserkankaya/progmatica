<?php

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Ui\AboutController;
use App\Http\Controllers\Ui\ClientController;
use App\Http\Controllers\Ui\ContactController;
use App\Http\Controllers\Ui\HomeController;
use App\Http\Controllers\Ui\PortfolioController;
use App\Http\Controllers\Ui\ServiceController;
use App\Http\Controllers\Ui\SliderController;
use Illuminate\Support\Facades\Route;



// Kayıt işlemi sayfası
Route::get('kayit-ol', function () {
    return view('auth.register');
})->name('auth.register');


// Kayıt işlemi post
Route::post('kayit-ol', [AuthController::class, 'register'])->name('auth.register');

// Giriş işlemi sayfası
Route::get('giris-yap', function () {
    return view('auth.login');
})->name('auth.login');

// Giriş işlemi post
Route::post('giris-yap', [AuthController::class, 'login'])->name('auth.login');

// Çıkış işlemi
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');


// Auth ile korunan route'lar
Route::middleware(['auth'])->group(function () {
    Route::get('/yonetim', function () {
        return view('yonetim');
    });
});


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
