<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable =
    [
        'judul',
        'slug',
        'user_id',
        'images',
        'content',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
