<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturOrganisasiModel;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $struktur_organisasi = StrukturOrganisasiModel::where('id', 1)->get();
        //dd($sejarah);
        return view('profil.struktur_organisasi.index', compact('struktur_organisasi'));
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
            'description' => $request->input('description'),
            'image' => $image,
            'status' => 1
        ];
        StrukturOrganisasiModel::where('id', $id)->update($updateDate);
        return redirect('struktur_organisasi')->with('alert-success', 'Success Update Data');
    }
}
