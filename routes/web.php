<?php

use Illuminate\Support\Facades\Route;
use App\Models\AnggotaOrganisasi;

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
    return view('welcome',['anggotaOrganisasi' => $anggotaOrganisasi]);
});

Route::get('/navbar', function(){
    return views('navbar');
    });

    Route::get('/umkm', function(){
        return view('umkm');
        });

Route::get('/about', function(){
    return views('about');
    });
    

