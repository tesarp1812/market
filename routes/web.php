<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CatalogController;

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

//akses home
Route::get('/home', function () {
    return view('homepage');
});

//home page
Route::get('/homepage', function () {
    return view('homepage');
});

//about page
Route::get('/about', function () {
    return view('about');
});


// Route::get('/catalog', function () {
//     return view('catalog');
// });
//barang

Route::resource('barang', BarangController::class)->middleware('can:isAdmin');
Route::get('/catalog', [CatalogController::class, 'index']);
Route::get('/manajemen_barang', [BarangController::class, 'index']);

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
