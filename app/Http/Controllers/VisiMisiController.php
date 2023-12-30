<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiModel;
use App\Models\KontakModel;

class VisiMisiController extends Controller
{
    public function index()
    {

        $visi_misi = VisiMisiModel::where('id', 1)->get();
        $kontak = KontakModel::where('id', 1)->get();
        return view('profil.visi_misi.index', compact('visi_misi', 'kontak'));
    }
}
