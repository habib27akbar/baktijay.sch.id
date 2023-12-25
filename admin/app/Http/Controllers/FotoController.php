<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoModel;

class FotoController extends Controller
{
    public function index()
    {
        $foto = FotoModel::all();
        //dd($sejarah);
        return view('galeri.foto.index', compact('foto'));
    }

    public function create()
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        return view('galeri.foto.create');
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $foto = FotoModel::findOrFail($id);

        return view('galeri.foto.edit', compact('foto'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $foto = FotoModel::findOrFail($id);

        return view('galeri.foto.edit', compact('foto'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('images');
        $storeData = [
            'keterangan' => $request->input('keterangan'),
            'image' => $image,
            'status' => 1
        ];
        FotoModel::create($storeData);
        return redirect('foto')->with('alert-success', 'Success Tambah Data');
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
        FotoModel::where('id', $id)->update($updateDate);
        return redirect('foto')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        FotoModel::findOrFail($id)->delete();
        return redirect('foto')->with('alert-success', 'Success deleted data');
    }
}
