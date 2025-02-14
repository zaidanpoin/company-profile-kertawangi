<?php

use Illuminate\Support\Facades\Route;
use App\Models\AnggotaOrganisasi;
use App\Models\Administrasi;
use App\Models\Konten;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Umkm;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\BeritaController;

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
    $anggotaOrganisasi = AnggotaOrganisasi::take(100)->get();
    $administrasi = Administrasi::take(1)->get()->toArray();
    $galeri = Galeri::take(1)->get()->toArray();
    $konten = Konten::take(1)->get()->toArray();
    return view('welcome', [
        'galeri' => $galeri,
        'anggotaOrganisasi' => $anggotaOrganisasi,
        'administrasi' => $administrasi,
        'konten' => $konten
    ]);
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/umkm', function () {
    $umkm = Umkm::paginate(6);
    return view('umkm',['umkm' => $umkm]);
});

Route::get('/wisata', [WisataController::class, 'index']);

Route::get('/about', function () {
    $konten = Konten::take(1)->get()->toArray();
    return view('about', ['konten' => $konten]);
});




Route::get('/berita', function(){
    $berita = Berita::orderBy('created_at', 'desc')->paginate(6);
        return view('berita',['berita'=>$berita]);
        });



Route::get('/detailberita/{id}',[BeritaController::class, 'detail']);



