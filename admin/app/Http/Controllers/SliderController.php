<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderModel;
use App\Models\FotoModel;

class SliderController extends Controller
{
    public function index()
    {
        $slider = SliderModel::all();
        //dd($sejarah);
        return view('slider.index', compact('slider'));
    }

    public function create()
    {
        $foto = FotoModel::all();
        //dd($sejarah);
        return view('slider.create', compact('foto'));
    }

    public function edit($id)
    {
        //$foto = SliderModel::all();
        //dd($sejarah);
        $slider = SliderModel::findOrFail($id);

        return view('slider.edit', compact('slider'));
    }

    public function show($id)
    {
        //$foto = SliderModel::all();
        //dd($sejarah);
        $slider = SliderModel::findOrFail($id);

        return view('slider.edit', compact('slider'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('images');
        $storeData = [
            'keterangan' => $request->input('keterangan'),
            'image' => $image,
            'status' => 1
        ];
        SliderModel::create($storeData);
        return redirect('slider')->with('alert-success', 'Success Tambah Data');
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
            'keterangan' => $request->input('keterangan'),
            'image' => $image,
            'status' => 1
        ];
        SliderModel::where('id', $id)->update($updateDate);
        return redirect('slider')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        SliderModel::findOrFail($id)->delete();
        return redirect('slider')->with('alert-success', 'Success deleted data');
    }
}
