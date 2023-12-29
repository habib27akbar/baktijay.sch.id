<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPembayaranModel;

class MsJenisPembayaranController extends Controller
{
    public function index()
    {
        $data = JenisPembayaranModel::all();
        //dd($sejarah);
        return view('master.jenis_pembayaran.index', compact('data'));
    }

    public function create()
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        return view('master.jenis_pembayaran.create');
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = JenisPembayaranModel::findOrFail($id);

        return view('master.jenis_pembayaran.edit', compact('data'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = JenisPembayaranModel::findOrFail($id);

        return view('master.jenis_pembayaran.edit', compact('data'));
    }

    public function store(Request $request)
    {

        JenisPembayaranModel::create($request->all());
        return redirect('jenis_pembayaran')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        JenisPembayaranModel::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('jenis_pembayaran')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        JenisPembayaranModel::findOrFail($id)->delete();
        return redirect('jenis_pembayaran')->with('alert-success', 'Success deleted data');
    }
}
