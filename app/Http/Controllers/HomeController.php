<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderModel;

class HomeController extends Controller
{

    public function index()
    {
        //
        $data_slider = SliderModel::all();

        return view('home', compact('data_slider'));
    }
}
