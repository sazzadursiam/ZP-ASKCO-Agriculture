<?php

use App\Http\Controllers\Frontend\MasterController;
use Illuminate\Support\Facades\Route;




Route::get('/', [MasterController::class, 'index'])->name('home_page');
Route::get('/about-us', [MasterController::class, 'about_us'])->name('about_us_page');



Route::group(['prefix' => '/services'], function () {
    Route::get('/seed-processing', [MasterController::class, 'seed_processing'])->name('seed-processing');
    Route::get('/seed-packing', [MasterController::class, 'seed_packaging'])->name('seed-packaging');
    Route::get('/transport', [MasterController::class, 'transport'])->name('transport');
    Route::get('/seed-laboratory', [MasterController::class, 'seed_laboratory'])->name('seed-laboratory');
    Route::get('/seed-storage', [MasterController::class, 'seed_storage'])->name('seed-storage');
});

Route::get('/clients', [MasterController::class, 'clients'])->name('clients');
Route::get('/contact', [MasterController::class, 'contact'])->name('contact');
Route::get('/gallery', [MasterController::class, 'gallery'])->name('gallery');
