<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturOrganisasiModel;
use App\Models\KontakModel;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {

        $struktur_organisasi = StrukturOrganisasiModel::where('id', 1)->get();
        $kontak = KontakModel::where('id', 1)->get();
        return view('profil.struktur_organisasi.index', compact('struktur_organisasi', 'kontak'));
    }
}
