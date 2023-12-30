<?php

namespace App\Http\Controllers;

use App\Models\FotoModel;
use Illuminate\Http\Request;
use App\Models\KontakModel;

class FotoController extends Controller
{
    public function index()
    {

        $foto = FotoModel::all();
        $kontak = KontakModel::where('id', 1)->get();
        return view('galeri.foto.index', compact('foto', 'kontak'));
    }
}
