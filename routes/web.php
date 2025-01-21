<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BarangController;

Route::get('/', [PagesController::class, 'home']);
Route::resource('barang', BarangController::class);
