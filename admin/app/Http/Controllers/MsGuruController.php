<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;
use App\Models\SekolahModel;
use App\Models\KewarganegaraanModel;

class MsGuruController extends Controller
{
    public function index()
    {
        $data = GuruModel::all();
        //dd($sejarah);
        return view('master.guru.index', compact('data'));
    }

    public function create()
    {
        $data_sekolah = SekolahModel::all();
        //$data_thn_akademik = TahunAkademikModel::all();
        $data_kweneg = KewarganegaraanModel::all();
        //dd($sejarah);
        return view('master.guru.create', compact('data_sekolah', 'data_kweneg'));
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        //$data = GuruModel::findOrFail($id);
        $data_sekolah = SekolahModel::all();
        $data_kweneg = KewarganegaraanModel::all();
        $data = GuruModel::findOrFail($id);

        return view('master.guru.edit', compact('data', 'data_sekolah', 'data_kweneg'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data_sekolah = SekolahModel::all();
        $data_kweneg = KewarganegaraanModel::all();
        $data = GuruModel::findOrFail($id);

        return view('master.guru.edit', compact('data', 'data_sekolah', 'data_kweneg'));
    }

    public function store(Request $request)
    {

        GuruModel::create($request->all());
        return redirect('guru')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        GuruModel::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('guru')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        GuruModel::findOrFail($id)->delete();
        return redirect('guru')->with('alert-success', 'Success deleted data');
    }
}
