<?php

namespace App\Http\Controllers;

use App\Models\KontakModel;
use App\Models\VideoModel;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {

        $video = VideoModel::all();
        $kontak = KontakModel::where('id', 1)->get();
        return view('galeri.video.index', compact('video', 'kontak'));
    }
}
