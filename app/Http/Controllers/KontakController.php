<?php

namespace App\Http\Controllers;

use App\Models\KontakModel;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {


        $kontak = KontakModel::where('id', 1)->get();
        return view('kontak.index', compact('kontak'));
    }
}
