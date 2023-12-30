<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KontakModel;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = KontakModel::where('id', 1)->get();

        return view('kontak.index', compact('kontak'));
    }

    public function update(Request $request, $id)
    {



        $updateDate = [
            'alamat' => $request->input('alamat'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),
            'youtube' => $request->input('youtube'),
            'telepon' => $request->input('telepon'),
            'fax' => $request->input('fax'),
        ];
        KontakModel::where('id', $id)->update($updateDate);
        return redirect('kontak')->with('alert-success', 'Success Update Data');
    }
}
