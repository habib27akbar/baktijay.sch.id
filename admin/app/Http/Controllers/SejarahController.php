<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SejarahModel;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = SejarahModel::where('id', 1)->get();
        //dd($sejarah);
        return view('profil.sejarah.index', compact('sejarah'));
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
        SejarahModel::where('id', $id)->update($updateDate);
        return redirect('sejarah')->with('alert-success', 'Success Update Data');
    }
}
