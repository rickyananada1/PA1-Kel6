<?php

use App\Http\Controllers\HomeControler;
use App\Http\Controllers\KategoriController;
use App\Models\kategori;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeControler::class, 'home'])->name('home');
Route::get('/about', [HomeControler::class, 'About'])->name('about');
Route::get('/reservasi', [HomeControler::class, 'Reservasi'])->name('reservasi');
Route::get('/dashboard', function () {
    return view('welcome');
});

Route::resource('kategori', KategoriController::class);


Route::get('/makanan',function(){
    return view('Home');
});
