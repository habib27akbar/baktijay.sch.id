<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RombelModel;
use App\Models\GuruModel;
use App\Models\SekolahModel;
use App\Models\TahunAkademikModel;

class MsRombelController extends Controller
{
    public function index()
    {
        //$data = RombelModel::all();
        $data = RombelModel::join('mst_guru', 'mst_guru.id', '=', 'mst_rombel.walikelas')
            ->join('mst_sekolah', 'mst_sekolah.id', '=', 'mst_rombel.id_sekolah')
            ->SELECT('*', 'mst_rombel.nama as nama_rombel', 'mst_sekolah.nama as nama_sekolah', 'mst_guru.nama as nama_guru', 'mst_rombel.id as id_rombel')
            ->get();
        //dd($sejarah);
        return view('master.rombel.index', compact('data'));
    }

    public function create()
    {
        $guru = GuruModel::all();
        $data_sekolah = SekolahModel::all();
        $data_thn_akademik = TahunAkademikModel::all();

        return view('master.rombel.create', compact('guru', 'data_sekolah', 'data_thn_akademik'));
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();

        $data = RombelModel::findOrFail($id);
        $guru = GuruModel::all();
        $data_sekolah = SekolahModel::all();
        $data_thn_akademik = TahunAkademikModel::all();
        return view('master.rombel.edit', compact('data', 'guru', 'data_sekolah', 'data_thn_akademik'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = RombelModel::findOrFail($id);
        $guru = GuruModel::all();
        $data_sekolah = SekolahModel::all();
        $data_thn_akademik = TahunAkademikModel::all();
        return view('master.rombel.edit', compact('data', 'guru', 'data_sekolah', 'data_thn_akademik'));
    }

    public function store(Request $request)
    {

        RombelModel::create($request->all());
        return redirect('rombel')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        RombelModel::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('rombel')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        RombelModel::findOrFail($id)->delete();
        return redirect('rombel')->with('alert-success', 'Success deleted data');
    }
}
