<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\ui\HomeController;
use Illuminate\Support\Facades\Route;



//Route::get('/anasayfa', function () {
//    return view('home.index');
//});

Route::get('/anasayfa', [HomeController::class, 'index']);

Route::get('/hakkimizda', [AboutController::class, 'index'])->name('about.index');
Route::get('/hizmetlerimiz', [ServiceController::class, 'index'])->name('service.index');
Route::get('/calismalarimiz', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/iletisim', [ContactController::class, 'index'])->name('contact.index');
Route::post('/iletisim', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('hakkimizda', AboutController::class);
    Route::resource('yorumlar', ClientController::class);
    Route::resource('iletisim', ContactController::class);
    Route::resource('calismalar', PortfolioController::class);
    Route::resource('hizmetler', ServiceController::class);
    Route::resource('slider', SliderController::class);
});
