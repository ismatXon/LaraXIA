<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\anggotascontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// cara memanggil views di routes
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/kategori', function () {
    return view('kategori/listkategori');
});

//cara memanggil controllier di route

// Route::get('/kategori',[KategorisController::class, 'index' ]);

// Route::get('/kategori/add',[KategorisController::class,'create']);

Route::resource('/kategori',[KategorisController::class]);
Route::resource('/anggota',[anggotascontroller::class]);