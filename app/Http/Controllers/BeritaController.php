<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
class BeritaController extends Controller
{
    public function detail($id){{

        $berita = Berita::find($id);
        if ($berita) {
            return view('detailberita', compact('berita'));
        } else {
            return redirect()->route('berita.index')->with('error', 'Berita not found');
        }

    }}
}
