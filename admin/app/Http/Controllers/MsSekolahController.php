<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SekolahModel;

class MsSekolahController extends Controller
{
    public function index()
    {
        $data = SekolahModel::all();
        //dd($sejarah);
        return view('master.sekolah.index', compact('data'));
    }

    public function create()
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        return view('master.sekolah.create');
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = SekolahModel::findOrFail($id);

        return view('master.sekolah.edit', compact('data'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = SekolahModel::findOrFail($id);

        return view('master.sekolah.edit', compact('data'));
    }

    public function store(Request $request)
    {

        SekolahModel::create($request->all());
        return redirect('sekolah')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        SekolahModel::where('id', $id)->update($request->all());
        return redirect('sekolah')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        SekolahModel::findOrFail($id)->delete();
        return redirect('sekolah')->with('alert-success', 'Success deleted data');
    }
}
