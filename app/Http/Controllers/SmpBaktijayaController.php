<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmpBaktijayaModel;
use App\Models\KontakModel;

class SmpBaktijayaController extends Controller
{
    public function index()
    {

        $smp_baktijaya = SmpBaktijayaModel::where('id', 1)->get();
        $kontak = KontakModel::where('id', 1)->get();
        return view('akademik.smp_baktijaya.index', compact('smp_baktijaya', 'kontak'));
    }
}
