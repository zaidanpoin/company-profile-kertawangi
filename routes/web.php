<?php

use Illuminate\Support\Facades\Route;
use App\Models\AnggotaOrganisasi;
use App\Models\Administrasi;
use App\Models\Galeri;
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
    $anggotaOrganisasi = AnggotaOrganisasi::take(10)->get();
    $administrasi = Administrasi::take(1)->get()->toArray();
    $galeri = Galeri::take(1)->get()->toArray();
    return view('welcome',['galeri'=>$galeri,'anggotaOrganisasi' => $anggotaOrganisasi,'administrasi'=>$administrasi]);
});

Route::get('/navbar', function(){
    return views('navbar');
    });

    Route::get('/umkm', function(){
        return view('umkm');
        });

Route::get('/about', function(){
    return view('about');
    });

    Route::get('/berita', function(){
        return view('berita');
        });

        Route::get('/detailberita', function(){
            return view('detailberita');
            });
