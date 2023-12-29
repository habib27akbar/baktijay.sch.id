<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RuangModel;

class MsRuangController extends Controller
{
    public function index()
    {
        $data = RuangModel::all();
        //dd($sejarah);
        return view('master.ruang.index', compact('data'));
    }

    public function create()
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        return view('master.ruang.create');
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = RuangModel::findOrFail($id);

        return view('master.ruang.edit', compact('data'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $data = RuangModel::findOrFail($id);

        return view('master.ruang.edit', compact('data'));
    }

    public function store(Request $request)
    {

        RuangModel::create($request->all());
        return redirect('ruang')->with('alert-success', 'Success Tambah Data');
    }

    public function update(Request $request, $id)
    {

        RuangModel::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect('ruang')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        RuangModel::findOrFail($id)->delete();
        return redirect('ruang')->with('alert-success', 'Success deleted data');
    }
}
