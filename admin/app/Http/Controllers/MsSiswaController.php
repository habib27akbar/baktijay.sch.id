<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
use App\Models\SekolahModel;
use App\Models\TahunAkademikModel;

class MsSiswaController extends Controller
{
    public function index()
    {
        $data = SiswaModel::all();
        //dd($sejarah);
        return view('master.siswa.index', compact('data'));
    }

    public function create()
    {
        $data_sekolah = SekolahModel::all();
        $data_thn_akademik = TahunAkademikModel::all();
        //dd($sejarah);
        return view('master.siswa.create', compact('data_sekolah', 'data_thn_akademik'));
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        //$data = SiswaModel::findOrFail($id);
        $data_sekolah = SekolahModel::all();
        $data_thn_akademik = TahunAkademikModel::all();
        $data = SiswaModel::findOrFail($id);

        return view('master.siswa.edit', compact('data', 'data_sekolah', 'data_thn_akademik'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data_sekolah = SekolahModel::all();
        $data_thn_akademik = TahunAkademikModel::all();
        $data = SiswaModel::findOrFail($id);

        return view('master.siswa.edit', compact('data', 'data_sekolah', 'data_thn_akademik'));
    }

    public function store(Request $request)
    {

        SiswaModel::create($request->all());
        return redirect('siswa')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        SiswaModel::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('siswa')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        SiswaModel::findOrFail($id)->delete();
        return redirect('siswa')->with('alert-success', 'Success deleted data');
    }
}
