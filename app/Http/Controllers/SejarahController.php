<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SejarahModel;
use App\Models\KontakModel;

class SejarahController extends Controller
{
    public function index()
    {

        $sejarah = SejarahModel::where('id', 1)->get();
        $kontak = KontakModel::where('id', 1)->get();
        return view('profil.sejarah.index', compact('sejarah', 'kontak'));
    }
}
