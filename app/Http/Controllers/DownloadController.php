<?php

namespace App\Http\Controllers;

use App\Models\DownloadModel;
use App\Models\KontakModel;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {

        $download = DownloadModel::all();
        $kontak = KontakModel::where('id', 1)->get();
        return view('portal.download.index', compact('download', 'kontak'));
    }
}
