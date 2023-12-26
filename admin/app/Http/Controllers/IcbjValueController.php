<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IcbjValueModel;

class IcbjValueController extends Controller
{
    //
    public function index()
    {
        $icbj_value = IcbjValueModel::where('id', 1)->get();
        //dd($sejarah);
        return view('profil.icbj_values.index', compact('icbj_value'));
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
        IcbjValueModel::where('id', $id)->update($updateDate);
        return redirect('icbj_value')->with('alert-success', 'Success Update Data');
    }
}
