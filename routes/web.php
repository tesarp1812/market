<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

//home page
Route::get('/homepage', function () {
    return view('homepage');
});

//barang

Route::resource('barang', BarangController::class);

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
