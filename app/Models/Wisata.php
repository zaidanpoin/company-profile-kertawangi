<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'latitude',
        'longtitude',
        'alamat',
        'gambar',
    ];
    // protected $casts = [
    //     'latitude' => 'float',
    //     'longitude' => 'float',
    // ];
}
