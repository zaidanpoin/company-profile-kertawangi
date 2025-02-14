<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar_depan',
        'gambar_pak_kades',
        'nama_pak_kades',
        'kata_sambutan',
        'gambar_about',
        'about',
        'gambar_struktur'
    ];
    protected $table = 'konten';

}

