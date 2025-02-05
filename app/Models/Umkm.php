<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Umkm extends Model
{
    use HasFactory,HasRoles;


    protected $table = 'umkm';


    protected $fillable = [
        'nama_umkm',
        'alamat',
        'nama_pemilik',
        'nomor_telepon',
        'thumbnail',
        'image1',
        'image2',
        'image3',
        'instangram_url',
        'tiktok_url','deskripsi','nama_produk','harga'
    ];



}
