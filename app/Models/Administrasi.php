<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;

    protected $table ='administrasi';
    protected $fillable = [
        'penduduk',
        'kepala_keluarga',
        'penduduk_sementara',
        'laki_laki',
        'perempuan',
        'mutasi_penduduk'
    ];

}
