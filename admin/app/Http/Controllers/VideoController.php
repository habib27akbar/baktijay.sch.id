<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoModel;

class VideoController extends Controller
{
    public function index()
    {
        $video = VideoModel::all();
        //dd($sejarah);
        return view('galeri.video.index', compact('video'));
    }

    public function create()
    {
        //$video = FotoModel::all();
        //dd($sejarah);
        return view('galeri.video.create');
    }

    public function edit($id)
    {
        //$video = FotoModel::all();
        //dd($sejarah);
        $video = VideoModel::findOrFail($id);

        return view('galeri.video.edit', compact('video'));
    }

    public function show($id)
    {
        //$video = FotoModel::all();
        //dd($sejarah);
        $video = VideoModel::findOrFail($id);

        return view('galeri.video.edit', compact('video'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('images');
        $storeData = [

            'video' => $image,
            'status' => 1
        ];
        VideoModel::create($storeData);
        return redirect('video')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $image = $request->input('image_old');
        if ($request->file('image')) {
            $image = $request->file('image')->store('images');
        }
        //return $request->file('image')->store('images');

        //ddd($request);

        $updateDate = [

            'video' => $image,
            'status' => 1
        ];
        VideoModel::where('id', $id)->update($updateDate);
        return redirect('video')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        VideoModel::findOrFail($id)->delete();
        return redirect('video')->with('alert-success', 'Success deleted data');
    }
}
