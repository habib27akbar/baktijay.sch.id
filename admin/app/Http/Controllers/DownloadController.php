<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadModel;

class DownloadController extends Controller
{
    public function index()
    {
        $download = DownloadModel::all();
        //dd($sejarah);
        return view('portal.download.index', compact('download'));
    }

    public function create()
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        return view('portal.download.create');
    }

    public function edit($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $download = DownloadModel::findOrFail($id);

        return view('portal.download.edit', compact('download'));
    }

    public function show($id)
    {
        //$foto = FotoModel::all();
        //dd($sejarah);
        $download = DownloadModel::findOrFail($id);

        return view('portal.download.edit', compact('download'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('images');
        $storeData = [
            'keterangan' => $request->input('keterangan'),
            'image' => $image,
            'status' => 1
        ];
        DownloadModel::create($storeData);
        return redirect('download')->with('alert-success', 'Success Tambah Data');
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
        DownloadModel::where('id', $id)->update($updateDate);
        return redirect('download')->with('alert-success', 'Success Update Data');
    }

    public function destroy($id)
    {
        DownloadModel::findOrFail($id)->delete();
        return redirect('download')->with('alert-success', 'Success deleted data');
    }
}
