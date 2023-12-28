<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAkademikModel;

class MsTahunAkademikController extends Controller
{
    public function index()
    {
        $data = TahunAkademikModel::all();
        //dd($sejarah);
        return view('master.thn_akademik.index', compact('data'));
    }

    public function create()
    {
        //$foto = TahunAkademikModel::all();
        //dd($sejarah);
        return view('master.thn_akademik.create');
    }

    public function edit($id)
    {
        //$foto = TahunAkademikModel::all();
        //dd($sejarah);
        $data = TahunAkademikModel::findOrFail($id);

        return view('master.thn_akademik.edit', compact('data'));
    }

    public function show($id)
    {
        //$foto = TahunAkademikModel::all();
        //dd($sejarah);
        $data = TahunAkademikModel::findOrFail($id);

        return view('master.thn_akademik.edit', compact('data'));
    }



    public function store(Request $request)
    {

        TahunAkademikModel::create($request->all('kode'));
        return redirect('thn_akademik')->with('alert-success', 'Success Tambah Data');
    }



    public function destroy($id)
    {
        TahunAkademikModel::findOrFail($id)->delete();
        return redirect('thn_akademik')->with('alert-success', 'Success deleted data');
    }
}
