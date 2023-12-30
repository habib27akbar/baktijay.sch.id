<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmkBaktijayaModel;
use App\Models\KontakModel;

class SmkBaktijayaController extends Controller
{
    public function index()
    {

        $smk_baktijaya = SmkBaktijayaModel::where('id', 1)->get();
        $kontak = KontakModel::where('id', 1)->get();
        return view('akademik.smk_baktijaya.index', compact('smk_baktijaya', 'kontak'));
    }
}
