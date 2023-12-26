<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisiModel;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visi_misi = VisiMisiModel::where('id', 1)->get();
        //dd($sejarah);
        return view('profil.visi_misi.index', compact('visi_misi'));
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
            'visi' => $request->input('visi'),
            'misi' => $request->input('misi'),
            'image' => $image,

        ];
        VisiMisiModel::where('id', $id)->update($updateDate);
        return redirect('visi_misi')->with('alert-success', 'Success Update Data');
    }
}
