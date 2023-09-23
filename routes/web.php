<?php

use App\Http\Controllers\Frontend\MasterController;
use Illuminate\Support\Facades\Route;




Route::get('/', [MasterController::class, 'index'])->name('home_page');
Route::get('/about-us', [MasterController::class, 'about_us'])->name('about_us_page');
