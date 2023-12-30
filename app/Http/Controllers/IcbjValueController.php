<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IcbjValueModel;
use App\Models\KontakModel;

class IcbjValueController extends Controller
{
    public function index()
    {

        $icbj_value = IcbjValueModel::where('id', 1)->get();
        $kontak = KontakModel::where('id', 1)->get();
        return view('profil.icbj_value.index', compact('icbj_value', 'kontak'));
    }
}
