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

Route::get('/', [HomeControler::class, 'home']);
Route::get('/dashboard', function () {
    return view('welcome');
});

Route::resource('kategori', KategoriController::class);
