<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderModel;
use App\Models\SejarahModel;
use App\Models\IcbjValueModel;
use App\Models\FotoModel;
use App\Models\KontakModel;

class HomeController extends Controller
{

    public function index()
    {
        //
        $data_slider = SliderModel::all();
        $sejarah = SejarahModel::where('id', 1)->get();
        $icbj_value = IcbjValueModel::where('id', 1)->get();
        $foto = FotoModel::all();
        $kontak = KontakModel::where('id', 1)->get();
        return view('home', compact('data_slider', 'sejarah', 'icbj_value', 'foto', 'kontak'));
    }
}
