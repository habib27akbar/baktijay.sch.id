<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaktuModel;

class MsWaktuController extends Controller
{
    public function index()
    {
        $data = WaktuModel::all();
        //dd($sejarah);
        return view('master.waktu.index', compact('data'));
    }

    public function create()
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $hari = array("SENIN", "SELASA", "RABU", "KAMIS", "JUMAT", "SABTU");

        return view('master.waktu.create', compact('hari'));
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = WaktuModel::findOrFail($id);
        $hari = array("SENIN", "SELASA", "RABU", "KAMIS", "JUMAT", "SABTU");

        return view('master.waktu.edit', compact('data', 'hari'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = WaktuModel::findOrFail($id);

        return view('master.waktu.edit');
    }

    public function store(Request $request)
    {
        $data_post = [
            'kode' => $request->input('kode'),
            'hari' => $request->input('hari'),
            'jam' => $request->input('jam_awal') . ':' . $request->input('menit_awal') . '-' . $request->input('jam_akhir') . ':' . $request->input('menit_akhir')
        ];
        WaktuModel::create($data_post);
        return redirect('waktu')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {
        $data_post = [
            'kode' => $request->input('kode'),
            'hari' => $request->input('hari'),
            'jam' => $request->input('jam_awal') . ':' . $request->input('menit_awal') . '-' . $request->input('jam_akhir') . ':' . $request->input('menit_akhir')
        ];
        WaktuModel::where('id', $id)->update($data_post);
        return redirect('waktu')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        WaktuModel::findOrFail($id)->delete();
        return redirect('waktu')->with('alert-success', 'Success deleted data');
    }
}
