<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MapelModel;

class MsMapelController extends Controller
{
    public function index()
    {
        $data = MapelModel::all();
        //dd($sejarah);
        return view('master.mapel.index', compact('data'));
    }

    public function create()
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        return view('master.mapel.create');
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = MapelModel::findOrFail($id);

        return view('master.mapel.edit', compact('data'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = MapelModel::findOrFail($id);

        return view('master.mapel.edit', compact('data'));
    }

    public function store(Request $request)
    {

        MapelModel::create($request->all());
        return redirect('mapel')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        MapelModel::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('mapel')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        MapelModel::findOrFail($id)->delete();
        return redirect('mapel')->with('alert-success', 'Success deleted data');
    }
}
