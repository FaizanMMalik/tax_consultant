<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index'])->name('home');
Route::post('/storeContactDetails',[MainController::class,'storeContactDetails'])->name('storeContactDetails');
Route::get('/about_us',[MainController::class,'aboutUs'])->name('aboutUs');
