<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmkBaktijayaModel;

class SmkBaktijayaController extends Controller
{
    public function index()
    {
        $smk_baktijaya = SmkBaktijayaModel::where('id', 1)->get();
        //dd($sejarah);
        return view('akademik.smk_baktijaya.index', compact('smk_baktijaya'));
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
        SmkBaktijayaModel::where('id', $id)->update($updateDate);
        return redirect('smk_baktijaya')->with('alert-success', 'Success Update Data');
    }
}
