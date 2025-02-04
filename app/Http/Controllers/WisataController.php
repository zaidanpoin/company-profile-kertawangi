<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
class WisataController extends Controller
{
    //

    public function index(){
        $wisatas = Wisata::all();
    return view('maps', compact('wisatas'));
    }
}
