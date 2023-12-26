<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmpBaktijayaModel;

class SmpBaktijayaController extends Controller
{
    public function index()
    {
        $smp_baktijaya = SmpBaktijayaModel::where('id', 1)->get();
        //dd($sejarah);
        return view('akademik.smp_baktijaya.index', compact('smp_baktijaya'));
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
        SmpBaktijayaModel::where('id', $id)->update($updateDate);
        return redirect('smp_baktijaya')->with('alert-success', 'Success Update Data');
    }
}
